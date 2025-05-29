<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|max:20',
            'type' => 'required',
            'message' => 'nullable|max:1000'
        ]);

        // Process the form data (send email, save to database, etc.)
        
        return view('temp_placeholder', ['context' => ucfirst('Thank you! We\'ll get back to you within one business day.')]);
    }
}
