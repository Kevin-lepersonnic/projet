@extends('layout')

@section('title', 'Création d\'une nouvelle question')

@section('content')
    <h1>Poser une question</h1>

    <form action="{{ route('questions.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        @if($errors->any())
            <aside class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </aside>
        @endif

        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="content">Question</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <button class="btn btn-primary">Enregistrer</button>
    </form>
@endsection