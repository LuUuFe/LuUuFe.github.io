<nav class="navbar navbar-expand-lg fixed-top border-bottom">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('img/krakix-light.png') }}" class="logo" alt="Logo Krakix" width="128">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"
      aria-controls="offcanvas" aria-label="Toggle navigation">
      <i class="bi bi-list fs-3 text-body-emphasis"></i>
    </button>
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasLabel">Krakix</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
          aria-label="Close"></button>
      </div>
      <div class="offcanvas-body align-items-center my-lg-2">
        <ul class="navbar-nav justify-content-start flex-grow-1 px-lg-3">
          <li class="nav-item mx-lg-2 my-1 my-lg-0">
            <a class="nav-link px-2 text-body-emphasis rounded-1" href="#">Broker</a>
          </li>
          <li class="nav-item mx-lg-2 my-1 my-lg-0">
            <a class="nav-link px-2 text-body-emphasis rounded-1" href="#">Cryptocurrency</a>
          </li>
          <li class="nav-item mx-lg-2 my-1 my-lg-0">
            <a class="nav-link px-2 text-body-emphasis rounded-1" aria-current="page" href="#">Purchase</a>
          </li>
          <li class="nav-item mx-lg-2 my-1 my-lg-0">
            <a class="nav-link px-2 text-body-emphasis rounded-1" href="#">About</a>
          </li>
        </ul>
        <div class="d-flex justify-content-center">
            <button class="btn btn-theme" onclick="toggleTheme()"><i id="icon-theme" class="bi bi-brightness-high fs-5"></i></button>
        </div>
      </div>
    </div>
  </div>
</nav>
