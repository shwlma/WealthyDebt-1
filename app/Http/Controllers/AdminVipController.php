<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VipLead;
use Illuminate\Routing\Controller;

class AdminVipController extends Controller
{
    public function index()
    {
        $leads = VipLead::latest()->paginate(20);
        return view('admin.vip_index', compact('leads'));
    }

    public function updateNotes(Request $request, $id)
    {
        $lead = VipLead::findOrFail($id);
        $lead->notes = $request->input('notes');
        $lead->save();

        return redirect()->back()->with('success', 'VIP lead notes updated.');
    }
}
