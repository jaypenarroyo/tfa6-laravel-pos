@extends('layouts.app')

@section('title', 'Home | POS Foundations')

@section('content')
<section class="hero">
    <div class="container hero-grid">
        <div>
            <p class="eyebrow">Laravel POS Application</p>
            <h1>A clean foundation for everyday point-of-sale work.</h1>
            <p class="lead">Explore a four-page Laravel application that uses migrations, seeders, and Eloquent models to keep customer and user data in a real database.</p>
            <div class="button-row">
                <a class="button primary" href="{{ route('customers.index') }}">View customers</a>
                <a class="button secondary" href="{{ route('about') }}">About the project</a>
            </div>
        </div>
        <div class="dashboard-preview" aria-label="Point-of-sale summary">
            <div class="preview-top">
                <span>Store overview</span>
                <span class="live-dot">Live</span>
            </div>
            <div class="metric-grid">
                <article><span>Customers</span><strong>5</strong><small>Seeded records</small></article>
                <article><span>Team users</span><strong>5</strong><small>Unique usernames</small></article>
                <article><span>Data access</span><strong>ORM</strong><small>Eloquent models</small></article>
                <article><span>Database</span><strong>SQLite</strong><small>Local development</small></article>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading">
            <p class="eyebrow">Four connected pages</p>
            <h2>Everything required by the activity</h2>
        </div>
        <div class="card-grid">
            <article class="feature-card"><span>01</span><h3>Landing page</h3><p>A focused introduction with working navigation to every area.</p></article>
            <article class="feature-card"><span>02</span><h3>About page</h3><p>A short explanation of the project and its MVC structure.</p></article>
            <article class="feature-card"><span>03</span><h3>Customer accounts</h3><p>A Blade table populated through the Customer Eloquent model.</p></article>
            <article class="feature-card"><span>04</span><h3>User accounts</h3><p>A database listing with unique usernames and full names.</p></article>
        </div>
    </div>
</section>
@endsection
