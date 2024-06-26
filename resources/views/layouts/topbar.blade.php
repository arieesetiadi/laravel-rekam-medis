<div class="app-header">
    <nav class="navbar navbar-light navbar-expand-lg">
        <div class="container-fluid">
            <div id="navbar" class="navbar-nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link hide-sidebar-toggle-button" href="#">
                            <i class="material-icons">first_page</i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="d-flex">
                <a class="btn btn-rounded btn-danger" href="{{ route('logout.process') }}">
                    <div class="d-flex align-items-center gap-1">
                        <i class="material-icons text-white" style="font-size: 18px">power_settings_new</i>
                        <span class="text-uppercase">
                            Logout
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </nav>
</div>
