<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">SDN Kebonagung </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ Request::is('dashboard/post') ? 'active' : '' }}"">
                <a href="/dashboard" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Database</li>
            <li class="{{ Request::is('dashboard/post') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard/post"><i class="fas fa-newspaper"></i> <span>Artikel</span></a>
            </li>
            <li class="{{ Request::is('dashboard/staff') ? 'active' : '' }}">
                <a class="nav-link" href="/dashboard/staff"><i class="fas fa-user-tie"></i> <span>Data Tenaga Pengajar</span></a>
            </li>
            <li class="{{ Request::is('dashboard/student') ? 'active' : '' }}">
                <a href="/dashboard/student" class="nav-link"><i class="fas fa-users"></i> <span>Data Siswa </span></a>
            </li>
            <li><a class="nav-link" href="credits.html"><i class="fas fa-pencil-ruler"></i> <span>Credits</span></a></li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <form action="{{ route('logout.auth') }}" method="POST">
                @csrf
                <button class="btn btn-danger btn-lg btn-block btn-icon-split" type="submit">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        </div>
    </aside>
</div>