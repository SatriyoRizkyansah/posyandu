
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
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Daftar Anak</span>
            </a>
        </li>
        <li class="nav-item {{ request()->routeIs('dashboard.orangtua.perkembangan') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard.orangtua.perkembangan') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Perkembangan</span>
            </a>
        </li>
              <li class="nav-item {{ request()->routeIs('dashboard.orangtua.imunisasi') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard.orangtua.imunisasi') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Imunisasi</span>
            </a>
        </li>
         </li>
              <li class="nav-item {{ request()->routeIs('dashboard.orangtua.jadwal') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard.orangtua.jadwal') }}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Jadwal</span>
            </a>
        </li>
        <li class="nav-item">
            <form action="/logout-orangtua" method="post">
                @csrf
                <button class="nav-link" type="submit" style="border: none; background: none; padding: 4;">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">Logout</span>
                </button>
            </form>
        </li>
    </ul>
</nav>