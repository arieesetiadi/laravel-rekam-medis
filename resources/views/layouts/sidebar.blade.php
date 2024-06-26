<div class="app-sidebar">
    <div class="logo">
        <a class="logo-icon" href="{{ route('dashboard.index') }}">
            <span class="logo-text">SYSTEM</span>
        </a>

        <div class="sidebar-user-switcher user-activity-online">
            <a href="#">
                <img class="rounded-circle" src="{{ asset('assets/images/profiles/default.png') }}" alt="Profile Picture">
                <span class="activity-indicator"></span>
                <span class="user-info-text">Robert<br>
                    <span class="user-state-info">Online</span>
                </span>
            </a>
        </div>
    </div>

    <div class="app-menu">
        <ul class="accordion-menu">
            <li class="sidebar-title">
                Main
            </li>

            <li class="{{ request()->routeIs('dashboard.index') ? 'active-page' : '' }}">
                <a href="{{ route('dashboard.index') }}" class="text-uppercase">
                    <i class="material-icons text-dark">dashboard</i>
                    Dashboard
                </a>
            </li>

            {{-- <li class="{{ request()->routeIs('cms.users.*') ? 'active-page' : '' }}">
                <a href="{{ route('cms.users.index') }}">
                    <i class="material-icons text-dark">people</i>
                    Users
                </a>
            </li> --}}
        </ul>
    </div>
</div>
