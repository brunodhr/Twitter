<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
            <div class="container">
                @guest
                <a class="navbar-brand" href="/">
                    Laravel
                </a>
                <a class="navbar-brand" href="/sobre">
                    Sobre nos
                </a>
                @else
                <a class="navbar-brand" href="/home">
                    <i class="fas fa-home"></i>
                </a>
                <a class="navbar-brand" href="/{{Auth::user()->username}}/followers">
                    <i class="fas fa-address-book"></i>
                </a>
                <a class="navbar-brand" href="/{{Auth::user()->username}}/followings">
                    <i class="far fa-address-book"></i>
                </a>
                <a class="navbar-brand" href="/{{Auth::user()->username}}"> 
                    <i class="fas fa-user"></i>
                </a>
                <a class="navbar-brand" href="/users"> 
                    <i class="fas fa-hashtag"></i>
                </a>
                <a class="navbar-brand" href="/notificacoes">
                    <i class="fas fa-bell"></i>
                </a> 
                    
                <a class="navbar-brand" href="/mensagens"> 
                    <i class="fas fa-envelope" style="width: 150%"></i>
                </a>
                @endguest
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">Logar</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">Registrar</a></li>
                        @else
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/edit">
                                    <i class="fas fa-user-edit">Editar</i>
                                </a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt">Sair</i>
                                </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>