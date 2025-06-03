
@extends('layouts.app')

@section('content')
<div class="container">
    <h2>VIP Day Leads</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th><th>Email</th><th>Phone</th><th>Notes</th><th>Actions</th>
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
@endsection
