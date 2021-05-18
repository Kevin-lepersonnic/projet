@extends('layout')

@section('title', $question->title)

@section('content')
    <article>
        <header class="mb-3">
            <h1>{{ $question->title }}</h1>
            <small>
                Rédigé par {{ $question->user->name }} le {{ $question->created_at->format('d/m/Y H:i') }}
            </small>
        </header>
        {!! nl2br(e($question->content)) !!}
    </article>
@endsection