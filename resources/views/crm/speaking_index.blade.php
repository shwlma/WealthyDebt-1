
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Speaking Engagement Requests</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th><th>Org</th><th>Email</th><th>Event</th><th>Topic</th><th>Notes</th><th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($leads as $lead)
                <tr>
                    <td>{{ $lead->name }}</td>
                    <td>{{ $lead->organization }}</td>
                    <td>{{ $lead->email }}</td>
                    <td>{{ $lead->event_name }}</td>
                    <td>{{ $lead->topic }}</td>
                    <td>
                        <form method="POST" action="{{ route('admin.speaking.notes', $lead->id) }}">
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
