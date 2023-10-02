<nav class="navbar navbar-expand-lg bg-light" style="border-bottom: 1px solid rgb(149, 149, 149);">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('movies.index') }}">VODRENTAL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link @if (str_contains(request()->path(), 'movies')) active @endif"
                    href="{{ route('movies.index') }}">Strona Główna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if (str_contains(request()->path(), 'studios')) active @endif"
                    href="{{ route('studios.index') }}">Studia</a>
            </li>
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0">
            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}">{{ Auth::user()->name }}, wyloguj się... </a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Zaloguj się...</a>
                </li>
            @endif
        </ul>
      </div>
    </div>
  </nav>
