@extends('layout')

@section('title', 'Questions')

@section('content')

    <h1>Toutes les Questions</h1>

    <nav>
        {{ $questions->links() }}
    </nav>

    @include('questions.list', ['questions' => $questions])

@endsection