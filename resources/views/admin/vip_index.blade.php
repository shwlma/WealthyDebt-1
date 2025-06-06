@extends('layouts.admin_tab')

@section('content')
    <div class="container">
        <h2>VIP Day Leads</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form id="filter-sort-form" class="filter-sort-section" action="{{ route('admin.vip') }}" method="GET">
            <div>
                <label for="search">Search by Name:</label>
                <input type="text" id="search" name="search" placeholder="Enter name" value="{{ request('search') }}">
            </div>

            <div>
                <label for="sort_by">Sort By:</label>
                <select id="sort_by" name="sort_by" onchange="applyFiltersAndSort()">
                    <option value="name" {{ request('sort_by') == 'name' ? 'selected' : '' }}>Name</option>
                    <option value="created_at" {{ request('sort_by') == 'created_at' ? 'selected' : '' }}>Date</option>
                </select>
            </div>
            <div>
                <label for="sort_order">Sort Order:</label>
                <select id="sort_order" name="sort_order" onchange="applyFiltersAndSort()">
                    <option value="desc" {{ request('sort_order') == 'desc' ? 'selected' : '' }}>Descending</option>
                    <option value="asc" {{ request('sort_order') == 'asc' ? 'selected' : '' }}>Ascending</option>
                </select>
            </div>

            <a id="export-csv-link" href="#" target="_blank">
                Export to CSV
            </a>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Notes</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($leads as $lead)
                    <tr>
                        <td>{{ $lead->name }}</td>
                        <td>{{ $lead->email }}</td>
                        <td>{{ $lead->phone }}</td>
                        <td>
                            <form method="POST" action="{{ route('admin.vip.notes', $lead->id) }}">
                                @csrf
                                <textarea name="notes">{{ $lead->notes ?? '' }}</textarea>
                                <button type="submit">Save</button>
                            </form>
                        </td>
                        <td>{{ $lead->created_at->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $leads->links() }}
    </div>
    <script>
        let searchTimeout;

        function applyFiltersAndSort() {
            const search = document.getElementById('search').value;
            const sortBy = document.getElementById('sort_by').value;
            const sortOrder = document.getElementById('sort_order').value;

            const baseUrl = "{{ route('admin.vip') }}"; // Changed to admin.groupvip
            const url = new URL(baseUrl);

            if (search) {
                url.searchParams.set('search', search);
            } else {
                url.searchParams.delete('search');
            }
            url.searchParams.set('sort_by', sortBy);
            url.searchParams.set('sort_order', sortOrder);

            // Redirect the browser to the new URL immediately
            window.location.href = url.toString();
        }

        // This function sets the export link based on current parameters in the URL
        function setExportLink() {
            const exportLink = document.getElementById('export-csv-link');
            const exportBaseUrl = "{{ route('admin.vip.export') }}"; // Changed to admin.groupvip.export
            const url = new URL(exportBaseUrl);

            // Get current parameters from the browser's URL
            const currentSearchParams = new URLSearchParams(window.location.search);

            // Copy all current search parameters to the export URL
            currentSearchParams.forEach((value, key) => {
                url.searchParams.set(key, value);
            });

            exportLink.href = url.toString();
        }

        // Add event listener for the search input with debounce
        document.getElementById('search').addEventListener('input', function () {
            clearTimeout(searchTimeout); // Clear previous timeout
            searchTimeout = setTimeout(() => {
                applyFiltersAndSort(); // Call applyFiltersAndSort after a delay
            }, 500); // 500ms debounce time
        });

        // Call setExportLink on page load to ensure it's correct from the start
        document.addEventListener('DOMContentLoaded', setExportLink);
    </script>
@endsection