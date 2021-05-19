@extends('layout')

@section('title', 'Accueil')

@section('content')
    <section>
        <h2>Les 5 derniers articles</h2>

        @include('questions.list', ['questions' => $questions])
    </section>
@endsection