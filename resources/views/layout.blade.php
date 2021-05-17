<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laravel - @yield('title')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
        <script src="{{ secure_asset('js/main.js') }}" defer></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                      </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Liste des articles</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Créer un nouvel article</a>
                        </li>
                      
                    </ul>

                </div>
            </nav>
        </header>
        
        <main class="container my-3">
            @yield('content')
        </main>
    </body>
</html>
