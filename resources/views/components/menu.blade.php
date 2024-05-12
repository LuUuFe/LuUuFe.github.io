<nav class="navbar navbar-expand-md fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('img/krakix-transparent.png') }}" class="logo" alt="Logo Krakix" width="128">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"
      aria-controls="offcanvas" aria-label="Toggle navigation">
      <i class="bi bi-list fs-3 text-white"></i>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasLabel">
          <img src="{{ asset('img/krakix-unnamed.png') }}" class="logo" alt="Logo Krakix" width="64">
        </h5>
        <button type="button" class="btn ms-auto" id="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="bi bi-x-lg fs-3 text-white"></i>
        </button>
      </div>
      <div class="offcanvas-body align-items-center my-md-2">
        <ul class="navbar-nav justify-content-center mx-auto px-md-3">
          <li class="nav-item mx-md-2 my-1 my-md-0">
            <a class="nav-link px-2 rounded-1 text-white" href="#">Broker</a>
          </li>
          <li class="nav-item mx-md-2 my-1 my-md-0">
            <a class="nav-link px-2 rounded-1 text-white" href="#">Cryptocurrency</a>
          </li>
          <li class="nav-item mx-md-2 my-1 my-md-0">
            <a class="nav-link px-2 rounded-1 text-white" aria-current="page" href="#">Purchase</a>
          </li>
          <li class="nav-item mx-md-2 my-1 my-md-0">
            <a class="nav-link px-2 rounded-1 text-white" href="#">About</a>
          </li>
        </ul>
        <div class="d-flex form mt-2 justify-content-center">
          <button class="btn text-white mx-2">Login</button>
          <button class="btn text-white sign-up rounded-pill px-4 mx-2">Sign up</button>
        </div>
      </div>
    </div>
  </div>
</nav>