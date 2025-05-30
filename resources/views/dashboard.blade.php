
<!DOCTYPE html>
<html>
<head>
    <title>CRM Dashboard</title>
</head>
<body>
    <h1>Leads Dashboard</h1>
    <table border="1">
        <tr>
            <th>Name</th><th>Email</th><th>Phone</th><th>Source</th><th>UTM</th><th>Last Contacted</th>
        </tr>
        @foreach($leads as $lead)
        <tr>
            <td>{{ $lead->name }}</td>
            <td>{{ $lead->email }}</td>
            <td>{{ $lead->phone }}</td>
            <td>{{ $lead->source }}</td>
            <td>{{ $lead->utm }}</td>
            <td>{{ $lead->last_contacted }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
