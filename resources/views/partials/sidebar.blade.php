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
          
        </ul>
      </nav>