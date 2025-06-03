<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GroupVipLead;

class AdminGroupVipController extends Controller
{
    public function index()
    {
        $leads = GroupVipLead::latest()->paginate(20);
        return view('admin.groupvip.index', compact('leads'));
    }

    public function updateNotes(Request $request, $id)
    {
        $lead = GroupVipLead::findOrFail($id);
        $lead->notes = $request->input('notes');
        $lead->save();

        return redirect()->back()->with('success', 'Group VIP lead notes updated.');
    }
}
