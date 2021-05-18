@extends('layout')

@section('title', 'blog')

@section('content')

    <h1>Liste des Questions</h1>

    <nav>
        {{ $questions->links() }}
    </nav>

    @include('questions.list', ['questions' => $questions])

@endsection