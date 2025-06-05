
@extends('layouts.admin_tab')

@section('content')
<div class="container">
    <h2>Group VIP Session Leads</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th><th>Email</th><th>Notes</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($leads as $lead)
                <tr>
                    <td>{{ $lead->name }}</td>
                    <td>{{ $lead->email }}</td>
                    <td>
                        <form method="POST" action="{{ route('admin.groupvip.notes', $lead->id) }}">
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
@endsection
