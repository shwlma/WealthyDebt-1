<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpeakingRequest;

class AdminSpeakingController extends Controller
{
    public function index()
    {
        $leads = SpeakingRequest::latest()->paginate(20);
        return view('admin.speaking.index', compact('leads'));
    }

    public function updateNotes(Request $request, $id)
    {
        $lead = SpeakingRequest::findOrFail($id);
        $lead->notes = $request->input('notes');
        $lead->save();

        return redirect()->back()->with('success', 'Speaker request notes updated.');
    }
}
