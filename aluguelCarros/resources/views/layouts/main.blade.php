<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!--Fontes do google-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!--CSS Botstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!--CSS projeto -->
        <link rel="preconnect" href="/css/styles.css">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo.jpg" alt="Aluguel de Carros">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/carros" class="nav-link">Carros</a>
                        </li>
                        <li class="nav-item">
                            <a href="/clientes" class="nav-link">Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a href="funcionarios" class="nav-link">Funcionarios</a> 
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
            @yield('content')
            <footer>
                <p>Aluguel de carros &copy;2024</p>
            </footer>
    </body>
</html>
