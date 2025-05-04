      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <style>
          .nav .nav-item.active > .nav-link {
            background-color: #A0C97A !important;
}
          .nav-item a.nav-link:hover {
            background-color: #A0C97A !important;
          }
        </style>

        <ul class="nav">
              {{-- <img src="{{ asset('images/logo/logo.png') }}" class="mr-2" alt="logo" />
              <h4>Posyandu mawar indah IX</h4> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ route('dashboard.admin.home') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item" >
            <a class="nav-link" href="{{ route('pendaftaran.create') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Pendaftaran Baru</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('jadwal.index') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Jadwal</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('petugas.index') }}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Petugas</span>
            </a>
          </li>

          <li class="nav-item">
            <form action="/logout" method="post">
              @csrf
              <button class="nav-link" type="submit" style="border: none; background: none; padding: 4;">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Logout</span>
              </button>
            </form>
          </li>
          
        </ul>
      </nav>