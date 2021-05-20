@extends('layout')

@section('title', 'Accueil')

@section('content')
    <section class="container border rounded mb-4 bg-light p-4">
        <h1 class="mb-4">Projet "Kévin et Ricardo"</h1>
        <p>Un forum d'entraide pour les développeurs.</p>
        <p>Vous êtes bloqué(e) et ne savez pas comment avancer ? Posez une question à la communauté !</p>
        <div>
            <a href="{{ route('questions.create') }}" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Poser une question</a>
            <a href="{{ route('questions.index') }}" class="btn btn-success btn-md active" role="button" aria-pressed="true">Voir toutes les questions</a>
        </div>
    </section>
    <section>
        <h2 class="mb-4">Les 5 dernières questions</h2>

        @include('questions.list', ['questions' => $questions])
    </section>
@endsection