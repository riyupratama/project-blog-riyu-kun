    <div class="container-fluid ">
      <a class="navbar-brand" href="/posts">Dashboard</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-md-flex justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">My Profile</a></li>
              <li><a class="dropdown-item" href="#">Setting</a></li>
              <li><hr class="dropdown-divider"></li>
              <li class="me-0">
                <form action="{{ route('logout') }}" method="post" class="ms-1 d-flex align-items-cneter">
                    @csrf
                    <button class="btn btn-white">Logout</button>
                </form>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>