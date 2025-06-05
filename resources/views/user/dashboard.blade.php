@extends('layouts.user_tab')

@section('content')
    <div class="container">
        <h1>Dashboard</h1>
        <div class="card" id="sessions">Upcoming Sessions</div>
        <div class="card" id="signups">Recent Signups</div>
        <div class="card" id="payments">Payment History</div>
        <div class="card" id="actions">
            <button onclick="sendPrepEmail()">Send Prep Email</button>
            <button onclick="viewFormSubmissions()">View Jotform Submissions</button>
        </div>
    </div>
    <script src="{{ asset('script/user_dashboard.js') }}"></script>
@endsection