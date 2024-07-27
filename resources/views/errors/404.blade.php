<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('layouts.meta')
    @include('layouts.styles')

    <style>
        body {
            background-color: unset !important;
        }
    </style>

    <title>Page Not Found</title>
</head>

<body>
    <div class="app app-error align-content-stretch d-flex flex-wrap">
        <div class="app-error-info">
            <h5 class="text-dark">Oops!</h5>
            
            <span>
                Sepertinya halaman yang Anda cari tidak tersedia.
            </span>

            <a href="{{ route('dashboard.index') }}" class="btn btn-primary">
                Kembali ke Dashboard
            </a>
        </div>

        <div class="app-error-background"></div>
    </div>
</body>

</html>
