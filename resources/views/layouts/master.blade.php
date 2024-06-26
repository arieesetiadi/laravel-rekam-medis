<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('layouts.meta')
    @include('layouts.styles')
</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        @include('layouts.sidebar')

        <div class="app-container">
            @include('layouts.topbar')

            <div class="app-content">
                <div class="content-wrapper">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    @include('layouts.scripts')
    @include('layouts.modals')
</body>

</html>
