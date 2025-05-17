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
      <li class="nav-item {{ request()->routeIs('dashboard.admin.home') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard.admin.home') }}">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item {{ request()->routeIs('pendaftaran.create') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pendaftaran.create') }}">
          <i class="icon-grid bi-person-plus mr-3"></i>
          <span class="menu-title">Pendaftaran Baru</span>
        </a>
      </li>
      <li class="nav-item {{ request()->routeIs('jadwal.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('jadwal.index') }}">
          <i class="bi bi-calendar mr-3"></i>
          <span class="menu-title">Jadwal</span>
        </a>
      </li>
      <li class="nav-item {{ request()->routeIs('petugas.index') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('petugas.index') }}">
          <i class="bi bi-person-video2 mr-3"></i>
          <span class="menu-title">Petugas</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="bi bi-arrow-left-square mr-3"></i>
          <span class="menu-title">Logout</span>
        </a>
      </li>
    </ul>
  </nav>
  
  <!-- Logout Modal -->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Logout</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah anda yakin ingin keluar dari aplikasi?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <form action="{{ route('logout') }}" method="post" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-danger">Ya, Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>