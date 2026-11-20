@extends('layouts.app')

@section('title', 'Users | POS Foundations')

@section('content')
<section class="page-hero compact">
    <div class="container">
        <p class="eyebrow">Team access</p>
        <h1>User Accounts</h1>
        <p class="lead">User records retrieved from the database through the User Eloquent model.</p>
    </div>
</section>

<section class="section table-section">
    <div class="container">
        <div class="table-meta"><span>{{ count($users) }} user records</span><span>Sample data</span></div>
        <div class="table-card">
            <table class="compact-table">
                <thead><tr><th>ID</th><th>Username</th><th>Full name</th></tr></thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td><strong>{{ $user->id }}</strong></td>
                        <td><span class="username">{{ $user->username }}</span></td>
                        <td>{{ $user->full_name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <p class="data-note">Records are loaded from the <code>users</code> table using <code>User::orderBy('id')->get()</code>.</p>
    </div>
</section>
@endsection
