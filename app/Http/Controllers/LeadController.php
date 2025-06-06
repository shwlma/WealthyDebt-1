<?php

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\StreamedResponse;
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

    public function Admin_dashboard(Request $request)
    {
        $query = Lead::query();

        // Filtering by source
        if ($request->filled('source')) {
            $query->where('source', 'like', '%' . $request->source . '%');
        }

        // Sorting
        $sortBy = $request->get('sort_by', 'created_at');
        $sortOrder = $request->get('sort_order', 'desc');
        $query->orderBy($sortBy, $sortOrder);

        $leads = $query->get();

        // Export to CSV if requested
        if ($request->has('export') && $request->export === 'csv') {
            $filename = 'leads_export_' . now()->format('Ymd_His') . '.csv';

            $headers = [
                'Content-type' => 'text/csv',
                'Content-Disposition' => "attachment; filename=\"$filename\"",
                'Pragma' => 'no-cache',
                'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
                'Expires' => '0',
            ];

            $columns = ['Name', 'Email', 'Phone', 'Source', 'UTM', 'Last Contacted', 'Notes/Tags'];

            $callback = function () use ($leads, $columns) {
                $file = fopen('php://output', 'w');
                fputcsv($file, $columns);

                foreach ($leads as $lead) {
                    fputcsv($file, [
                        $lead->name,
                        $lead->email,
                        $lead->phone,
                        $lead->source,
                        $lead->utm,
                        $lead->last_contacted ? $lead->last_contacted->format('Y-m-d H:i:s') : 'N/A',
                        $lead->notes_tags,
                    ]);
                }

                fclose($file);
            };

            return new StreamedResponse($callback, 200, $headers);
        }

        // Otherwise render the view
        return view('admin.dashboard', compact('leads'));
    }

    public function updateNote(Request $request, $id)
    {
        $lead = Lead::findOrFail($id);
        $lead->notes_tags = $request->input('notes_tags');
        $lead->save();

        // if ($request->wantsJson()) {
        //     return response()->json(['message' => 'Note updated successfully.']);
        // }

        return redirect()->back()->with('success', 'Note updated successfully!');
    }

    public function User_dashboard()
    {
        return view('user.dashboard');
    }

}
