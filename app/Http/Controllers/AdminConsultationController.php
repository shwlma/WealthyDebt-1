<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation;

class AdminConsultationController extends Controller
{
    public function index()
    {
        $leads = Consultation::latest()->paginate(20);
        return view('admin.consultation_index', compact('leads'));
    }

    public function updateNotes(Request $request, $id)
    {
        $lead = Consultation::findOrFail($id);
        $lead->notes = $request->input('notes');
        $lead->save();

        return redirect()->back()->with('success', 'Consultation notes updated.');
    }
}
