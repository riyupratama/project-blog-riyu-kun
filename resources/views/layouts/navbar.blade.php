    <div class="container-fluid">
      <a class="navbar-brand" href="/">Riyu-Kun</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pages/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Disclimer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Privacy Policy</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/?category=php">PHP</a></li>
              <li><a class="dropdown-item" href="/?category=javascript">JAVASCRIPT</a></li>
              <li><a class="dropdown-item" href="/?category=html">HTML</a></li>
              <li><a class="dropdown-item" href="/?category=css">CSS</a></li>
              <li><a class="dropdown-item" href="/?category=laravel">LARAVEL</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex me-2 mb-3 mb-md-0" action="" method="GET">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
            <button class="btn btn-outline-dark" type="submit">Search</button>
        </form>
        @if (Auth::check())
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item text-dark" href="#">My Profile</a></li>
              <li><a class="dropdown-item text-dark" href="/posts">Dashboard</a></li>
              <li><a class="dropdown-item text-dark" href="#">Setting</a></li>
              <li><hr class="dropdown-divider"></li>
              <li class="me-0">
                <form action="{{ route('logout') }}" method="post" class="ms-1 d-flex align-items-cneter">
                    @csrf
                    <button class="btn btn-white">Logout</button>
                </form>
              </ul>
            </li>
        </ul>
            @else
                <a href="/login" class="btn btn-dark">Login</a>

            @endif
      </div>
    </div>