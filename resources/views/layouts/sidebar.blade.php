<div class="app-sidebar">
    <div class="logo">
        <span class="logo-icon">
            <span class="logo-text">SYSTEM</span>
        </span>

        <div class="sidebar-user-switcher user-activity-online">
            <div>
                <img class="rounded-circle" src="{{ asset('assets/images/profiles/default.png') }}" alt="Profile Picture">
                <span class="activity-indicator"></span>
                <span class="user-info-text">Robert<br>
                    <span class="user-state-info">Online</span>
                </span>
            </div>
        </div>
    </div>

    <div class="app-menu">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                Utama
            </li>

            <li class="{{ request()->routeIs('dashboard.index') ? 'active-page' : '' }}">
                <a href="{{ route('dashboard.index') }}" class="text-uppercase">
                    <i class="material-icons text-dark">dashboard</i>
                    Dashboard
                </a>
            </li>

            <li class="sidebar-title">
                Menu
            </li>

            <li class="{{ request()->routeIs('peminjaman.*') ? 'active-page' : '' }}">
                <a href="{{ route('peminjaman.index') }}" class="text-uppercase">
                    <i class="material-icons text-dark">list_alt</i>
                    Peminjaman
                </a>
            </li>

            <li class="{{ request()->routeIs('penyediaan.*') ? 'active-page' : '' }}">
                <a href="{{ route('penyediaan.index') }}" class="text-uppercase">
                    <i class="material-icons text-dark">inventory</i>
                    Penyediaan
                </a>
            </li>
        </ul>
    </div>
</div>
