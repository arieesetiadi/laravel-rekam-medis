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

    <title>Login | {{ config('app.name') }}</title>
</head>

<body>
    <div class="p-lg-5 container p-4">
        <div class="d-flex justify-content-lg-start justify-content-center mb-lg-5 mb-4">
            <img width="150" src="{{ asset('assets/images/logos/rsd-mangusada-transparent.png') }}" alt="RSD Icon">
        </div>

        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3">
                <div class="card shadow-lg">
                    <div class="card-header border-bottom">
                        <h2 class="text-uppercase py-2 text-center">Sistem Penyediaan Rekam Medis</h2>
                    </div>

                    <div class="card-body py-4">
                        <div class="d-flex justify-content-center">
                            <form id="login" action="{{ route('login.process') }}" method="POST" class="w-75">
                                @csrf
                                {{-- Input Email --}}
                                <div class="mb-lg-4 mb-3">
                                    <label id="label-email" class="form-label d-block" for="email">
                                        Email
                                    </label>

                                    <input id="email" class="form-control mb-2" name="email" type="email"
                                        value="{{ old('email') }}" aria-describedby="label-email" placeholder="Email">

                                    @error('email')
                                        <span class="d-block text-danger" for="email">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>

                                {{-- Input Password --}}
                                <div>
                                    <div class="d-flex">
                                        <label id="label-password" class="form-label d-block" for="password">
                                            Password
                                        </label>

                                        <div class="d-inline-block form-check form-switch px-5">
                                            <input id="toggle-password" class="form-check-input" name="toggle-password"
                                                type="checkbox" tabindex="-1"
                                                onchange="togglePassword(event, 'password')">
                                        </div>
                                    </div>

                                    <input id="password" class="form-control mb-2" name="password" type="password"
                                        aria-describedby="label-password"
                                        placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"
                                        autocomplete="off">

                                    @error('password')
                                        <span class="d-block text-danger" for="password">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card-footer bg-white">
                        <div class="auth-submit d-flex justify-content-center py-2">
                            <button class="btn btn-primary text-uppercase px-4" type="submit" form="login"
                                role="button">
                                Login
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.scripts')

    {!! JsValidator::formRequest('App\Http\Requests\LoginRequest', '#login') !!}
</body>

</html>
