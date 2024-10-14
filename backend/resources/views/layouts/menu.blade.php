<nav class="navbar navbar-dark bg-dark navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route("home")}}">USA lovak</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs("home")) {{"active"}} @endif" @if(request()->routeIs("home")) {{'"aria-current="page"'}} @endif href="{{route("home")}}">Főoldal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs("horse.list")) {{"active"}} @endif"  @if(request()->routeIs("horse.list")) {{'"aria-current="page"'}} @endif href="{{route("horse.list")}}">Felsorolás</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs("horse.table")) {{"active"}} @endif"  @if(request()->routeIs("horse.table")) {{'"aria-current="page"'}} @endif href="{{route("horse.table")}}">Táblázat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if(request()->routeIs("horse.grid")) {{"active"}} @endif"  @if(request()->routeIs("horse.grid")) {{'"aria-current="page"'}} @endif href="{{route("horse.grid")}}">Bootstrap GRID</a>
        </li>
      </ul>
    </div>
  </div>
</nav>