@extends('layout')

@section('title', 'Accueil')

@section('content')
    <h1>Page d'accueil du site</h1>
    
    <section>
        <h2>Les 5 derniers articles</h2>
        
        @include('questions.list', ['questions' => $questions])
    </section>
@endsection