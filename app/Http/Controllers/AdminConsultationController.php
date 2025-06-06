<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Consultation; // Assuming Consultation model is correct
use Symfony\Component\HttpFoundation\StreamedResponse;

class AdminConsultationController extends Controller
{
    public function index(Request $request)
    {
        $query = Consultation::query();

        // Apply search filter by name (assuming 'name' is the column)
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Apply sorting
        $sortBy = $request->get('sort_by', 'created_at'); // Default sort by created_at
        $sortOrder = $request->get('sort_order', 'desc'); // Default sort order descending

        // Validate sort_by to prevent SQL injection or errors
        $validSortColumns = ['name', 'created_at']; // Add other sortable columns here
        if (!in_array($sortBy, $validSortColumns)) {
            $sortBy = 'created_at'; // Fallback to default
        }

        // Validate sort_order
        if (!in_array($sortOrder, ['asc', 'desc'])) {
            $sortOrder = 'desc'; // Fallback to default
        }

        $query->orderBy($sortBy, $sortOrder);


        // Assuming 'status' filter is not needed for now based on your provided Blade
        // if ($request->filled('status')) {
        //     $query->where('status', $request->status);
        // }

        $leads = $query->paginate(20);

        return view('admin.consultation_index', compact('leads'));
    }

    public function export(Request $request): StreamedResponse
    {
        $query = Consultation::query();

        // Apply search filter by name (assuming 'name' is the column)
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        // Apply sorting
        $sortBy = $request->get('sort_by', 'created_at'); // Default sort by created_at
        $sortOrder = $request->get('sort_order', 'desc'); // Default sort order descending

        // Validate sort_by to prevent SQL injection or errors
        $validSortColumns = ['name', 'created_at']; // Add other sortable columns here
        if (!in_array($sortBy, $validSortColumns)) {
            $sortBy = 'created_at'; // Fallback to default
        }

        // Validate sort_order
        if (!in_array($sortOrder, ['asc', 'desc'])) {
            $sortOrder = 'desc'; // Fallback to default
        }

        $query->orderBy($sortBy, $sortOrder);

        // Assuming 'status' filter is not needed for now based on your provided Blade
        // if ($request->filled('status')) {
        //     $query->where('status', $request->status);
        // }

        $leads = $query->get(); // Get all results for export

        $filename = 'consultations_' . now()->format('Ymd_His') . '.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        $callback = function () use ($leads) {
            $handle = fopen('php://output', 'w');
            // CSV header row (ensure these match your lead attributes)
            fputcsv($handle, ['ID', 'Name', 'Email', 'Interest', 'Notes', 'Date']);

            foreach ($leads as $lead) {
                fputcsv($handle, [
                    $lead->id,
                    $lead->name,
                    $lead->email,
                    $lead->interest,
                    $lead->notes,
                    $lead->created_at->toDateString(),
                ]);
            }

            fclose($handle);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function updateNotes(Request $request, $id)
    {
        $lead = Consultation::findOrFail($id);
        $lead->notes = $request->input('notes');
        $lead->save();

        return redirect()->back()->with('success', 'Consultation notes updated.');
    }
}