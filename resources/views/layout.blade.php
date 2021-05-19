<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LE projet fabuleux - @yield('title')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
        <script src="{{ secure_asset('js/main.js') }}" defer></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('home') }}">Accueil</a>
                       </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('questions.index') }}">Questions</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a href="{{ route('questions.create') }}" class="nav-link">Créer un nouvelle Question</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link">Deconnexion</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link">Liste des utilisateurs</a>
                        </li>
                        @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Inscription</a>
                        </li>
                        @endauth
                    </ul>

                </div>
            </nav>
        </header>

        <main class="container my-3">
            @yield('content')
        </main>
    </body>
</html>
