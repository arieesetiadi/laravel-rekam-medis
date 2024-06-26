<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('cms.layouts.meta')
    @include('cms.layouts.styles')

    <title>CMS {{ config('app.name') }}</title>
</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">
        @include('cms.layouts.sidebar')

        <div class="app-container">
            @include('cms.layouts.topbar')

            <div class="app-content">
                <div class="content-wrapper">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    @include('cms.layouts.scripts')
    @include('cms.layouts.modals')
</body>

</html>
