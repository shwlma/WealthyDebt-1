<!DOCTYPE html>
<html>

<head>
    <title>CRM Dashboard</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>

<body>
    <h2>CRM Leads Dashboard</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Source</th>
                <th>UTM</th>
                <th>Last Contact</th>
            </tr>
        </thead>
        <tbody>
            {{-- Loop through the leads passed from the controller --}}
            @foreach ($leads as $lead)
                <tr>
                    {{-- Access properties using object notation ($lead->property_name) --}}
                    <td>{{ htmlspecialchars($lead->name) }}</td>
                    <td>{{ htmlspecialchars($lead->email) }}</td>
                    <td>{{ htmlspecialchars($lead->phone) }}</td>
                    <td>{{ htmlspecialchars($lead->source) }}</td>
                    <td>{{ htmlspecialchars($lead->utm) }}</td>
                    {{-- last_contacted is now a Carbon object due to the Lead model's $casts property --}}
                    <td>
                        {{ htmlspecialchars($lead->last_contacted ? $lead->last_contacted->format('Y-m-d H:i') : 'N/A') }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>