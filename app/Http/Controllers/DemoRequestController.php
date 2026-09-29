<?php

namespace App\Http\Controllers;

use App\Models\DemoRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DemoRequestController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'company' => ['required', 'string', 'max:150'],
            'phone' => ['required', 'string', 'max:30'],
            'email' => ['nullable', 'email', 'max:150'],
            'business_type' => ['nullable', 'string', 'max:100'],
            'team_size' => ['nullable', 'string', 'max:50'],
            'message' => ['nullable', 'string', 'max:1000'],
        ]);

        DemoRequest::create($validated);

        return back()->with('success', 'Thank you! Our ERP specialist will contact you shortly.');
    }
}
