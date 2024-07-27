@php
    use App\Constants\Gender;
@endphp

<div class="app-sidebar">
    <div class="logo">
        <span class="logo-icon">
            <span class="logo-text">ADMIN</span>
        </span>

        <div class="sidebar-user-switcher user-activity-online">
            <div>
                @php
                    $avatarPath =
                        auth()->user()->jns_kel == Gender::LAKI_LAKI
                            ? asset('assets/images/profiles/male.png')
                            : asset('assets/images/profiles/female.png');
                @endphp

                <img class="rounded-circle" src="{{ $avatarPath }}" alt="Profile Picture">
                <span class="activity-indicator"></span>
                <span class="user-info-text">{{ auth()->user()->nama ?? '-' }}<br>
                    <span class="user-state-info">Admin</span>
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

            <li class="{{ request()->routeIs(['peminjam.*', 'pasien.*']) ? 'active-page' : '' }}">
                <a href="" class="text-uppercase">
                    <i class="material-icons text-dark">list_alt</i>
                    Peminjaman
                    <i class="material-icons has-sub-menu">keyboard_arrow_right</i>
                </a>

                <ul class="sub-menu">
                    <li>
                        <a href="{{ route('peminjam.index') }}"
                            class="{{ request()->routeIs('peminjam.*') ? 'active' : '' }}">
                            Data Peminjam
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('pasien.index') }}"
                            class="{{ request()->routeIs('pasien.*') ? 'active' : '' }}">
                            Data Pasien
                        </a>
                    </li>
                </ul>
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
