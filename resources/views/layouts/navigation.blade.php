<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container">
      <a class="navbar-brand" href="{{ asset('/') }}">Trip Craft</a>
      {{-- <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> --}}
      {{-- <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel"> --}}
        {{-- <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div> --}}
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ asset('/') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('activity/create-activity') }}">Plan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('activity/index') }}">View</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('users/login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset('users/register') }}">SignUp</a>
            </li>
          </ul>
          {{-- <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form> --}}
        </div>
      {{-- </div> --}}
    </div>
  </nav>    