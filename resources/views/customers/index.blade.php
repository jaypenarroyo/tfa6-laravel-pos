@extends('layouts.app')

@section('title', 'Customers | POS Foundations')

@section('content')
<section class="page-hero compact">
    <div class="container">
        <p class="eyebrow">Account directory</p>
        <h1>Customer Accounts</h1>
        <p class="lead">Customer records retrieved from the database through the Customer Eloquent model.</p>
    </div>
</section>

<section class="section table-section">
    <div class="container">
        <div class="table-meta"><span>{{ count($customers) }} customer records</span><span>Sample data</span></div>
        <div class="table-card">
            <table class="compact-table">
                <thead><tr><th>ID</th><th>Full name</th><th>Email</th><th>Phone</th></tr></thead>
                <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td><strong>{{ $customer->id }}</strong></td>
                        <td>{{ $customer->full_name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone ?? 'Not provided' }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <p class="data-note">Records are loaded from the <code>customers</code> table using <code>Customer::orderBy('id')->get()</code>.</p>
    </div>
</section>
@endsection
