<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SparcLead;

class AdminSparcController extends Controller
{
    public function index()
    {
        $leads = SparcLead::latest()->paginate(20);
        return view('admin.sparc.index', compact('leads'));
    }

    public function updateNotes(Request $request, $id)
    {
        $lead = SparcLead::findOrFail($id);
        $lead->notes = $request->input('notes');
        $lead->save();

        return redirect()->back()->with('success', 'SPARC lead notes updated.');
    }
}
