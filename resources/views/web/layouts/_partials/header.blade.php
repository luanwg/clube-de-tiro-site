<header class="header navbar-fixed-top">
    <!-- Navbar -->
    <nav class="navbar" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="menu-container">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="toggle-icon"></span>
                </button>

                <!-- Logo -->
                <div class="logo">
                    <a class="logo-wrap" href="{{ route('web.home') }}">
                        <img class="logo-img logo-img-main" src="{{ url ('assets/img/logo.png') }}" alt="CET Logo">
                        <img class="logo-img logo-img-active" src="{{ url ('assets/img/logo.png') }}" alt="CET Logo">
                    </a>
                </div>
                <!-- End Logo -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-collapse">
                <div class="menu-container">
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item">
                            <a class="nav-item-child nav-item-hover @if (Route::getCurrentRoute()->getName() == "web.home") ? active : '' @endif"
                            href="{{ route('web.home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item-child nav-item-hover @if (Route::getCurrentRoute()->getName() == "web.sobre") ? active : '' @endif"
                            href="{{ route('web.sobre') }}">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item-child nav-item-hover @if (Route::getCurrentRoute()->getName() == "web.cursos") ? active : '' @endif"
                            href="{{ route('web.cursos') }}">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item-child nav-item-hover @if (Route::getCurrentRoute()->getName() == "web.calendario") ? active : '' @endif"
                            href="{{ route('web.calendario') }}">Calendário</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item-child nav-item-hover @if (Route::getCurrentRoute()->getName() == "web.galeria") ? active : '' @endif"
                            href="{{ route('web.galeria') }}">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item-child nav-item-hover @if (Route::getCurrentRoute()->getName() == "web.noticia") ? active : '' @endif"
                            href="{{ route('web.noticia') }}">Notícias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item-child nav-item-hover @if (Route::getCurrentRoute()->getName() == "web.contato") ? active : '' @endif"
                            href="{{ route('web.contato') }}">Fale Conosco</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- End Navbar Collapse -->
        </div>
    </nav>
    <!-- Navbar -->
</header>
