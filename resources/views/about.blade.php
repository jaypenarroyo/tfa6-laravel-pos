@extends('layouts.app')

@section('title', 'About | POS Foundations')

@section('content')
<section class="page-hero">
    <div class="container narrow">
        <p class="eyebrow">About the application</p>
        <h1>Learning Laravel through a familiar POS structure.</h1>
        <p class="lead">This project advances the Laravel POS foundations application from temporary arrays to a database-backed Eloquent implementation.</p>
    </div>
</section>

<section class="section">
    <div class="container two-column">
        <div>
            <h2>Purpose</h2>
            <p>The application demonstrates the same MVC responsibilities in a Laravel project: routes select controller actions, controllers use Eloquent models to retrieve records, and Blade views render the response.</p>
            <p>Laravel migrations define the customer and user schemas, while the POS seeder creates the same realistic sample records used in TFA2.</p>
        </div>
        <div class="stack-list">
            <article><strong>Routes</strong><span>Four named GET routes in routes/web.php</span></article>
            <article><strong>Controllers</strong><span>Customer and user controllers query their Eloquent models</span></article>
            <article><strong>Views</strong><span>Blade loops render database records as model objects</span></article>
            <article><strong>Database</strong><span>Migrations and a seeder reproduce the TFA2 schema and data</span></article>
        </div>
    </div>
</section>
@endsection
