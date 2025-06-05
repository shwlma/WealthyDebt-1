@extends('layouts.admin_tab')

@section('content')
    <div class="container">
        <h2>CRM Leads Dashboard</h2>
        <form id="filter-sort-form" class="filter-sort-section">
            <div>
                <label for="source_filter">Filter by Source:</label>
                <input type="text" id="source_filter" name="source" placeholder="Website, Social Media, etc."
                       oninput="applyFiltersAndSort()"
                    value="{{ request('source') }}">
            </div>

            <div>
                <label for="sort_by">Sort By:</label>
                <select id="sort_by" name="sort_by">
                    <option value="last_contacted" {{ request('sort_by') == 'last_contacted' ? 'selected' : '' }}>Last Contact</option>
                    <option value="name" {{ request('sort_by') == 'name' ? 'selected' : '' }}>Name</option>
                    <option value="created_at" {{ request('sort_by') == 'created_at' ? 'selected' : '' }}>Date Captured</option>
                </select>
            </div>

            <div>
                <label for="sort_order">Sort Order:</label>
                <select id="sort_order" name="sort_order">
                    <option value="desc" {{ request('sort_order') == 'desc' ? 'selected' : '' }}>Descending</option>
                    <option value="asc" {{ request('sort_order') == 'asc' ? 'selected' : '' }}>Ascending</option>
                </select>
            </div>

            <a id="export-csv-link" href="#" target="_blank">
                Export to CSV
            </a>
        </form>

        <table class="table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Source</th>
                    <th>UTM</th>
                    <th>Last Contact</th>
                    <th>Notes/Tags</th>
                </tr>
            </thead>
            <tbody id="leads-table-body">
            </tbody>
        </table>
    </div>

    <script>
        const allLeads = JSON.parse(@json($leads->toJson()));

        function renderTable(leadsToRender) {
            const tableBody = document.getElementById('leads-table-body');
            tableBody.innerHTML = ''; 

            if (leadsToRender.length === 0) {
                const noDataRow = document.createElement('tr');
                noDataRow.innerHTML = '<td colspan="7" style="text-align: center; padding: 1em;">No leads found matching your criteria.</td>';
                tableBody.appendChild(noDataRow);
                return;
            }

            leadsToRender.forEach(lead => {
                const row = document.createElement('tr');
                row.dataset.leadId = lead.id; 

                const lastContacted = lead.last_contacted ? new Date(lead.last_contacted).toLocaleString('en-US', {
                    year: 'numeric',
                    month: '2-digit',
                    day: '2-digit',
                    hour: '2-digit',
                    minute: '2-digit'
                }).replace(',', '') : 'N/A';

                row.innerHTML = `
                    <td>${escapeHtml(lead.name)}</td>
                    <td>${escapeHtml(lead.email)}</td>
                    <td>${escapeHtml(lead.phone)}</td>
                    <td>${escapeHtml(lead.source)}</td>
                    <td>${escapeHtml(lead.utm)}</td>
                    <td>${escapeHtml(lastContacted)}</td>
                    <td class="editable-cell" contenteditable="true">${escapeHtml(lead.notes_tags || '')}</td>
                `;
                tableBody.appendChild(row);
            });

            attachEditableCellListeners();
        }

        function escapeHtml(text) {
            const map = {
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                '"': '&quot;',
                "'": '&#039;'
            };
            return text.replace(/[&<>"']/g, function(m) { return map[m]; });
        }

        function applyFiltersAndSort() {
            let filteredLeads = [...allLeads]; 

            const sourceFilter = document.getElementById('source_filter').value.toLowerCase();
            if (sourceFilter) {
                filteredLeads = filteredLeads.filter(lead =>
                    lead.source && lead.source.toLowerCase().includes(sourceFilter)
                );
            }

            const sortBy = document.getElementById('sort_by').value;
            const sortOrder = document.getElementById('sort_order').value;

            filteredLeads.sort((a, b) => {
                let valA, valB;

                if (sortBy === 'last_contacted' || sortBy === 'created_at') {
                    valA = a[sortBy] ? new Date(a[sortBy]) : (sortOrder === 'asc' ? new Date(0) : new Date()); // Handle N/A for sorting
                    valB = b[sortBy] ? new Date(b[sortBy]) : (sortOrder === 'asc' ? new Date(0) : new Date());
                } else if (sortBy === 'name') {
                    valA = a[sortBy] ? a[sortBy].toLowerCase() : '';
                    valB = b[sortBy] ? b[sortBy].toLowerCase() : '';
                } else {
                    valA = a[sortBy] || '';
                    valB = b[sortBy] || '';
                }

                if (valA < valB) return sortOrder === 'asc' ? -1 : 1;
                if (valA > valB) return sortOrder === 'asc' ? 1 : -1;
                return 0;
            });

            renderTable(filteredLeads);
            updateExportLink(); 
        }

        function attachEditableCellListeners() {
            const editableCells = document.querySelectorAll('.editable-cell');

            editableCells.forEach(cell => {
                let originalContent = cell.textContent;

                cell.addEventListener('focus', () => {
                    originalContent = cell.textContent;
                });

                cell.addEventListener('blur', async () => {
                    const newContent = cell.textContent.trim();
                    if (newContent !== originalContent.trim()) {
                        const leadId = cell.closest('tr').dataset.leadId;
                        console.log(`Updating lead ${leadId} with new note: ${newContent}`);

                        try {
                            const csrfTokenElement = document.querySelector('meta[name="csrf-token"]');
                            const csrfToken = csrfTokenElement ? csrfTokenElement.content : '';

                            const response = await fetch(`/admin/leads/${leadId}/note`, { 
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': csrfToken 
                                },
                                body: JSON.stringify({ notes_tags: newContent })
                            });

                            if (response.ok) {
                                const data = await response.json();
                                console.log('Note updated successfully:', data.message);
                                originalContent = newContent; 

                                const leadIndex = allLeads.findIndex(lead => lead.id == leadId);
                                if (leadIndex !== -1) {
                                    allLeads[leadIndex].notes_tags = newContent;
                                }

                            } else {
                                const errorData = await response.json();
                                console.error('Failed to update note:', errorData.message);
                                cell.textContent = originalContent;
                            }
                        } catch (error) {
                            console.error('Error during fetch:', error);
                            cell.textContent = originalContent; 
                        }
                    }
                });

                cell.addEventListener('keydown', (e) => {
                    if (e.key === 'Enter') {
                        e.preventDefault(); 
                        cell.blur(); 
                    }
                });
            });
        }

        // Function to update the Export CSV link based on current filters/sorts
        function updateExportLink() {
            const sourceFilter = document.getElementById('source_filter').value;
            const sortBy = document.getElementById('sort_by').value;
            const sortOrder = document.getElementById('sort_order').value;

            const params = new URLSearchParams();
            if (sourceFilter) params.append('source', sourceFilter);
            if (sortBy) params.append('sort_by', sortBy);
            if (sortOrder) params.append('sort_order', sortOrder);
            params.append('export', 'csv'); // Always include export parameter

            const exportLink = document.getElementById('export-csv-link');
            exportLink.href = `{{ route('admin.dashboard') }}?${params.toString()}`;
        }


        // Event listeners
        document.addEventListener('DOMContentLoaded', () => {
            // Initial render of the table when the page loads
            applyFiltersAndSort();

            // Listen for form submission (or input changes) to re-apply filters/sorts
            const filterSortForm = document.getElementById('filter-sort-form');
            filterSortForm.addEventListener('submit', (e) => {
                e.preventDefault(); // Prevent default form submission
                applyFiltersAndSort();
            });

            // Optional: Apply filters/sorts dynamically as user types or selects
            document.getElementById('source_filter').addEventListener('input', applyFiltersAndSort);
            document.getElementById('sort_by').addEventListener('change', applyFiltersAndSort);
            document.getElementById('sort_order').addEventListener('change', applyFiltersAndSort);
        });
    </script>
@endsection
