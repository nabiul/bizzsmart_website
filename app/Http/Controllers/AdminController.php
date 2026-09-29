<?php

namespace App\Http\Controllers;

use App\Models\DemoRequest;
use App\Models\ProductAssistantConversation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function login(): View|RedirectResponse
    {
        if (session('bizzsmart_admin')) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $adminEmail = (string) config('bizzsmart.admin_email');
        $adminPassword = (string) config('bizzsmart.admin_password');

        if (! hash_equals($adminEmail, $credentials['email']) || ! hash_equals($adminPassword, $credentials['password'])) {
            return back()->withInput($request->only('email'))->withErrors(['email' => 'The admin credentials are incorrect.']);
        }

        $request->session()->regenerate();
        $request->session()->put('bizzsmart_admin', true);

        return redirect()->route('admin.dashboard');
    }

    public function dashboard(Request $request): View
    {
        $query = DemoRequest::query()->latest();

        if ($search = trim((string) $request->query('search'))) {
            $query->where(function ($builder) use ($search) {
                $builder->where('name', 'like', "%{$search}%")
                    ->orWhere('company', 'like', "%{$search}%")
                    ->orWhere('phone', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%");
            });
        }

        return view('admin.dashboard', [
            'requests' => $query->paginate(12)->withQueryString(),
            'totalRequests' => DemoRequest::count(),
            'todayRequests' => DemoRequest::whereDate('created_at', today())->count(),
        ]);
    }

    public function assistantConversations(Request $request): View
    {
        $conversations = ProductAssistantConversation::query()
            ->with('messages')
            ->latest('last_message_at')
            ->paginate(15);

        return view('admin.assistant-conversations', [
            'conversations' => $conversations,
            'totalConversations' => ProductAssistantConversation::count(),
        ]);
    }

    public function destroy(DemoRequest $demoRequest): RedirectResponse
    {
        $demoRequest->delete();

        return back()->with('success', 'Demo request removed.');
    }

    public function logout(Request $request): RedirectResponse
    {
        $request->session()->forget('bizzsmart_admin');
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
