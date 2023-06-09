<nav class="navbar navbar-expand-lg navbar-dark bg-dark fontNav sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><i><img class="brandlogo rounded-bottom"
                    src="{{ asset('images/shopping.png') }}"alt="Footer Logo"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                {{-- START ELEMENTI VISIBILI A UTENTI NON-LOGGATI --}}
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Log-in</a>
                    </li>
                @else
                    {{-- END ELEMENTI VISIBILI A UTENTI NON-LOGGATI --}}
                    {{-- START ELEMENTI VISIBILI A UTENTI LOGGATI --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item mx-2" href="#">Azione</a></li>
                            <li><a class="dropdown-item mx-2" href="#">Azione2</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="/logout" onclick="event.preventDefault();getElementById('form-logout').submit()">Logout</a></li>
                            
                                    <form id="form-logout" action="{{ route('logout') }}" method="post" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endguest
                {{-- END ELEMENTI VISIBILI A UTENTI LOGGATI --}}
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Naviga per categorie
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Abbigliamento</a></li>
                            <li><a class="dropdown-item" href="#">Tech</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
