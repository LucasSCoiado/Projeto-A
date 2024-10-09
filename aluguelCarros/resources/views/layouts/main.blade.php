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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!--CSS projeto -->

        <link rel="stylesheet" href="../../css/styles.css">
        
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
                            <a href="/events/cadastroCarro" class="nav-link">Cadastrar Carros</a>
                        </li>
                        
                        @guest
                            <li class="nav-item">
                                <a href="/login" class="nav-link">Login</a>
                            </li>
                            <li class="nav-item">
                                <a href="/register" class="nav-link">Registrar-se</a>
                            </li>
                        @endguest
                        @auth
                            <li class="nav-item">
                                <form action="/logout" method="post">
                                    @csrf
                                    <a 
                                        href="/logout" 
                                        class="nav-link"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">   
                                        Sair
                                    </a>
                                </form>
                            </li>
                        @endauth
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    @if (session('msg'))
                        <p class="msg">{{session('msg')}}</p>
                    @endif
                    @yield('content')
                </div>
            </div>
        </main>    
        
        <footer class="footer">
                <p>Aluguel de carros &copy;2024</p>
        </footer>
    </body>
</html>