<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException; // Import ValidationException

class LoginController extends Controller
{
    protected $redirectTo = '/dashboard'; // Redirect to the dashboard after successful login

    public function showLoginForm()
    {
        return view('auth.login'); // Assuming you have a login form view at resources/views/auth/login.blade.php
    }

    public function login(Request $request)
    {
        // 1. Validate the login request data
        try {
            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);

            // 2. Attempt to authenticate the user
            // Auth::attempt() returns true on success, false on failure
            if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
                // Regeneration of session ID for security
                $request->session()->regenerate();

                // Redirect authenticated user to their intended location or default dashboard
                return redirect()->intended($this->redirectTo);
            }

            // If authentication fails, we'll manually redirect back with an error message
            return redirect()->back()->withErrors([
                'email' => trans('auth.failed'),
            ]);

        } catch (ValidationException $e) {
            // If validation fails, redirect back with the validation errors
            return redirect()->back()->withErrors($e->validator->errors());
        }
    }

    public function logout(Request $request)
    {
        // Log out the authenticated user
        Auth::logout();

        // Invalidate the user's session
        $request->session()->invalidate();

        // Regenerate the CSRF token
        $request->session()->regenerateToken();

        // Redirect to the home page or login page
        return redirect('/');
    }
}