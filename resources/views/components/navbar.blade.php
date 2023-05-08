<nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
    <div class="container-fluid">
        <a class="navbar-brand logo fw-bold" href="{{route('welcome')}}">Post It!</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item px-3">
                    <a class="nav-link active" aria-current="page" href="{{route('welcome')}}">Home</a>
                </li>
                <li class="nav-item pe-3">
                    <a class="nav-link active" href="{{route('notes.show')}}">Notas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('notes.create')}}">Crear Nota</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                @guest
                @if(Route::has('login'))
                <li class="nav-item px-3">
                    <a class="nav-link active" href="{{route('login')}}">Iniciar Sesion</a>
                </li>
                @endif

                @if(Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link active" href="{{route('register')}}">Registrarse</a>
                </li>
                @endif
                @else

                <li class="nav-item">
                    <a href="{{route('notes.show')}}" class="nav-link active">{{Auth::user()->name}}</a>
                </li>
                <li class="nav-item">
                    <form id="logoutForm" action="{{route('logout')}}" method="POST">
                        @csrf
                    </form>
                    <a id="logoutBtn" href="#" class="nav-link active px-3">Salir</a>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
