<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('layouts.meta')
    @include('layouts.styles')

    <title>Login | {{ config('app.name') }}</title>
</head>

<body>
    <div class="app app-auth-sign-in align-content-stretch d-flex justify-content-end flex-wrap">
        <div class="app-auth-background"></div>
        <div class="app-auth-container">
            <form id="login" action="{{ route('login.authenticate') }}" method="POST">
                @csrf

                <div class="logo">
                    Sign In
                </div>

                <p class="auth-description">
                    Please login to access the website.
                </p>

                <div class="auth-credentials m-b-xxl">
                    {{-- Input Username --}}
                    <div class="m-b-md">
                        <label id="label-username" class="form-label d-block" for="username">
                            Username
                        </label>

                        <input id="username" class="form-control mb-2" name="username" type="text"
                            value="{{ old('username') }}" aria-describedby="label-username" placeholder="e.g. robert">

                        @error('username')
                            <span class="d-block text-danger" for="username">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    {{-- Input Password --}}
                    <div class="m-b-md">
                        <div class="d-flex">
                            <label id="label-password" class="form-label d-block" for="password">
                                Password
                            </label>

                            <div class="d-inline-block form-check form-switch px-5">
                                <input id="toggle-password" class="form-check-input" name="toggle-password"
                                    type="checkbox" tabindex="-1" onchange="togglePassword(event, 'password')">
                            </div>
                        </div>

                        <input id="password" class="form-control mb-2" name="password" type="password"
                            aria-describedby="label-password"
                            placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" autocomplete="off">

                        @error('password')
                            <span class="d-block text-danger" for="password">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="auth-submit">
                    <button class="btn btn-primary" type="submit" role="button">
                        Sign In
                    </button>
                </div>
            </form>
        </div>
    </div>

    @include('layouts.scripts')

    {!! JsValidator::formRequest('App\Http\Requests\LoginRequest', '#login') !!}
</body>

</html>
