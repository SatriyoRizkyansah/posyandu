<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light p-0">
  <div class="container-fluid d-flex justify-content-between align-items-center">

    @php
      $dashboardRoute = auth('web')->check() ? route('dashboard.admin.home') : route('dashboard.orangtua.home');
    @endphp
    <!-- Logo dan brand -->
    <a class="navbar-brand d-flex align-items-center" href="{{ $dashboardRoute }}">
      <img src="{{ asset('images/logo/logo.png') }}" alt="logo" width="50" class="me-2" />
      <span class="d-none d-sm-inline fw-bold">Posyandu Mawar Indah IX</span>
    </a>

    <!-- Toggle button for mobile -->
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center mr-2" type="button" data-toggle="offcanvas">
        <span class="icon-menu"></span>
    </button>

    <!-- Right Side -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
      <!-- Add your nav items or dropdowns here -->
    </div>

  </div>
</nav>