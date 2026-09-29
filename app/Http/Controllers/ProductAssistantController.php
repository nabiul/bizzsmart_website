<?php

namespace App\Http\Controllers;

use App\Services\ProductAssistantService;
use App\Models\ProductAssistantConversation;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Throwable;

class ProductAssistantController extends Controller
{
    public function start(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:190'],
            'company' => ['nullable', 'string', 'max:190'],
            'phone' => ['required', 'string', 'max:40'],
        ]);

        $conversation = ProductAssistantConversation::create([
            ...$validated,
            'public_token' => (string) Str::uuid(),
            'ip_address' => $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 1000),
            'last_message_at' => now(),
        ]);

        return response()->json(['conversation_token' => $conversation->public_token]);
    }

    public function ask(Request $request, ProductAssistantService $assistant): JsonResponse
    {
        $validated = $request->validate([
            'message' => ['required', 'string', 'max:1200'],
            'conversation_token' => ['required', 'uuid'],
        ]);
        $conversation = ProductAssistantConversation::where('public_token', $validated['conversation_token'])->firstOrFail();
        $history = $conversation->messages()->oldest('id')->get(['role', 'content'])->toArray();

        try {
            $question = trim($validated['message']);
            $result = $assistant->ask($question, $history);
            $conversation->messages()->createMany([
                ['role' => 'user', 'content' => $question],
                ['role' => 'assistant', 'content' => $result['answer']],
            ]);
            $conversation->forceFill(['last_message_at' => now()])->save();

            return response()->json($result);
        } catch (Throwable $exception) {
            report($exception);

            return response()->json([
                'message' => 'The product assistant is not available right now. Please email contact@bizzsmart.xyz or call/WhatsApp +88 01976729816.',
            ], 503);
        }
    }
}
