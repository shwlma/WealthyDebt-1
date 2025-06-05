<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use Carbon\Carbon;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:leads,email', 
            'phone' => 'required|string|max:255', 
            'source' => 'nullable|string|max:255',
            'utm' => 'nullable|string|max:255',
        ]);

        $validated['last_contacted'] = Carbon::now();

        Lead::create($validated);

        return redirect('/dashboard')->with('success', 'Lead captured successfully!');
    }

    public function Admin_dashboard()
    {
        $leads = Lead::latest()->get();

        return view('admin.dashboard', compact('leads'));
    }
     public function User_dashboard()
    {
        return view('user.dashboard');
    }

}
