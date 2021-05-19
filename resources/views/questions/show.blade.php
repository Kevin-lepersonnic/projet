@extends('layout')

@section('title', $question->title)

@section('content')
    <article>
        <header class="mb-3">
            <h1>{{ $question->title }}</h1>
            <p>
                Catégories :
                <ul>
                    @foreach($categories as $category)
                        <li>{{ $category->name }}</li>
                    @endforeach
                </ul>
            </p>
            <small>
                Rédigé par {{ $question->user->name }} le {{ $question->created_at->format('d/m/Y H:i') }}
            </small>
        </header>
        {!! nl2br(e($question->content)) !!}
    </article>
    @auth
    <aside>
        <h2>Commentaires</h2>

        <form action="{{ route('questions.comments', ['id' => $question->id]) }}" method="post" class="mb-2">
            <fieldset>
                <legend>Ajouter un commentaire</legend>
                @csrf

                <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    @if($errors->has('pseudo'))
                        <input id="pseudo" name="pseudo" value="{{ old('pseudo') }}" type="text" class="form-control is-invalid">
                        <div class="invalid-feedback">
                            {{ $errors->first('pseudo') }}
                        </div>
                    @else
                        <input id="pseudo" name="pseudo" value="{{ old('pseudo') }}" type="text" class="form-control">
                    @endif
                </div>
                <div class="form-group">
                    <label for="content">Contenu</label>
                    @if($errors->has('content'))
                        <textarea name="content" id="content" cols="30" rows="5" class="form-control is-invalid">{{ old('content') }}</textarea>
                        <div class="invalid-feedback">
                            {{ $errors->first('content') }}
                        </div>
                    @else
                        <textarea name="content" id="content" cols="30" rows="5" class="form-control">{{ old('content') }}</textarea>
                    @endif
                </div>
                <button class="btn btn-primary">Ajouter</button>
            </fieldset>
        </form>

        <ul class="list-unstyled">
            @foreach($comments as $comment)
                <li>
                    <article>
                        <header>
                            Rédigé par {{ $comment->pseudo }} le {{ $comment->created_at->format('d/m/Y H:i') }}
                        </header>

                        <p>{!! e(nl2br($comment->content)) !!}</p>
                    </article>
                </li>
            @endforeach
        </ul>
    </aside>
    @else
    <p id="message">Connectez vous pour Répondre a cette question!</p>
    @endauth
@endsection