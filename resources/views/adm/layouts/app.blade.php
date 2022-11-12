<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
   

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/adm') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('adm.sobre')}}">Sobre Nós</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="cursosDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Cursos</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cursosDropdown">
                                    <a class="dropdown-item" href="{{route('adm.cursos.create')}}">Adicionar Novo</a>
                                    <a class="dropdown-item" href="{{route('adm.cursos.index')}}">Editar/Excluir</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="calendarioDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Calendário</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="calendarioDropdown">
                                    <a class="dropdown-item" href="{{route('adm.calendario.create')}}">Adicionar</a>
                                    <a class="dropdown-item" href="{{route('adm.calendario.index')}}">Editar/Excluir</a>
                                    <a class="dropdown-item" href="{{route('adm.calendario-evento.create')}}">Adicionar Nova Evento (Categoria)</a>
                                    <a class="dropdown-item" href="{{route('adm.calendario-evento.index')}}">Editar/Excluir Evento (Categoria)</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="galeriaDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Galeria</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="galeriaDropdown">
                                    <a class="dropdown-item" href="{{route('adm.galeria.create')}}">Adicionar Fotos</a>
                                    <a class="dropdown-item" href="{{route('adm.galeria.index')}}">Editar/Excluir Fotos</a>
                                    <a class="dropdown-item" href="{{route('adm.galeria-categoria.create')}}">Adicionar Galeria (Categoria)</a>
                                    <a class="dropdown-item" href="{{route('adm.galeria-categoria.index')}}">Editar/Excluir Galeira (Categoria)</a>

                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="noticiasDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>Notícias</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="noticiasDropdown">
                                    <a class="dropdown-item" href="{{route('adm.noticias.create')}}">Adicionar Notícia</a>
                                    <a class="dropdown-item" href="{{route('adm.noticias.index')}}">Editar/Excluir Notícia</a>
                                    <a class="dropdown-item" href="{{route('adm.noticias-categorias.create')}}">Adicionar Categoria</a>
                                    <a class="dropdown-item" href="{{route('adm.noticias-categorias.index')}}">Editar/Excluir Categoria</a>
                                </div>
                            </li>
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @auth
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @stack('scripts')
    
</body>
</html>
