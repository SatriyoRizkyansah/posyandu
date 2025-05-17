
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
        <li class="nav-item {{ request()->routeIs('dashboard.orangtua.home') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard.orangtua.home') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item {{ request()->routeIs('dashboard.orangtua.anak') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard.orangtua.anak') }}">
                <i class="bi bi-gender-ambiguous mr-3"></i>
                <span class="menu-title">Daftar Anak</span>
            </a>
        </li>
        <li class="nav-item {{ request()->routeIs('dashboard.orangtua.perkembangan') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard.orangtua.perkembangan') }}">
                <i class="bi bi-diagram-3 mr-3"></i>
                <span class="menu-title">Perkembangan</span>
            </a>
        </li>
              <li class="nav-item {{ request()->routeIs('dashboard.orangtua.imunisasi') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard.orangtua.imunisasi') }}">
                <i class="bi bi-vinyl mr-3"></i>
                <span class="menu-title">Imunisasi</span>
            </a>
        </li>
         </li>
              <li class="nav-item {{ request()->routeIs('dashboard.orangtua.jadwal') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard.orangtua.jadwal') }}">
                <i class="bi bi-calendar mr-3"></i>
                <span class="menu-title">Jadwal</span>
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
          <form action="{{ route('logout.orangtua') }}" method="post" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-danger">Ya, Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>