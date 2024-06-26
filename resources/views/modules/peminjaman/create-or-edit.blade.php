@use('\App\Constants\GeneralStatus', 'GeneralStatus')

@extends('cms.layouts.master')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <div class="page-description px-0">
                    <h1>{{ $title }}</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form id="form-user" class="row"
                            action="{{ !$edit ? route('cms.users.store') : route('cms.users.update', $user->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method(!$edit ? 'POST' : 'PUT')

                            {{-- Input Username --}}
                            <div class="col-12 col-lg-6 mb-3">
                                <label id="label-username" class="form-label d-block required" for="username">
                                    Username
                                </label>

                                <input id="username" class="form-control mb-2" name="username" type="text"
                                    value="{{ old('username', $user->username ?? null) }}" aria-describedby="label-username"
                                    placeholder="Username">

                                @error('username')
                                    <span class="d-block text-danger" for="username">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            {{-- Input Name --}}
                            <div class="col-12 col-lg-6 mb-3">
                                <label id="label-name" class="form-label d-block required" for="name">
                                    Name
                                </label>

                                <input id="name" class="form-control mb-2" name="name" type="text"
                                    value="{{ old('name', $user->name ?? null) }}" aria-describedby="label-name"
                                    placeholder="Name">

                                @error('name')
                                    <span class="d-block text-danger" for="name">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            {{-- Input Email --}}
                            <div class="col-12 col-lg-6 mb-3">
                                <label id="label-email" class="form-label d-block required" for="email">
                                    Email
                                </label>

                                <input id="email" class="form-control mb-2" name="email" type="email"
                                    value="{{ old('email', $user->email ?? null) }}" aria-describedby="label-email"
                                    placeholder="Email address (e.g. robert@example.com)">

                                @error('email')
                                    <span class="d-block text-danger" for="email">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            {{-- Input Phone --}}
                            <div class="col-12 col-lg-6 mb-3">
                                <label id="label-phone" class="form-label d-block" for="phone">
                                    Phone
                                </label>

                                <input id="phone" class="form-control mb-2" name="phone" type="text"
                                    value="{{ old('phone', $user->phone ?? null) }}" aria-describedby="label-phone"
                                    placeholder="Phone number (e.g. 0821xxxxxxxx)">

                                @error('phone')
                                    <span class="d-block text-danger" for="phone">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            {{-- Input User Role --}}
                            <div class="col-12 col-lg-6 mb-3">
                                <label id="label-user-role-id" class="form-label d-block required" for="user-role-id">
                                    User Role
                                </label>

                                <select id="user-role-id" class="form-select mb-2" name="user_role_id"
                                    aria-label="User role select">
                                    <option selected disabled>Choose User Role</option>

                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}" @selected($role->id == old('user_role_id', $user->role->id ?? null))>
                                            {{ $role->name }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('user_role_id')
                                    <span class="d-block text-danger" for="user_role_id">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            {{-- Input Status --}}
                            <div class="col-12 col-lg-6 mb-3">
                                <label id="label-status" class="form-label d-block required" for="status">
                                    Status
                                </label>

                                <select id="status" class="form-select mb-2" name="status"
                                    aria-label="User status select" aria-disabled="true">
                                    <option selected disabled>Choose Status</option>

                                    @foreach (GeneralStatus::values() as $status)
                                        <option value="{{ $status }}" @selected($status == old('status', $user->status ?? null))>
                                            {{ GeneralStatus::label($status) }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('status')
                                    <span class="d-block text-danger" for="status">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            {{-- Input Password --}}
                            <div class="col-12 col-lg-6 mb-3">
                                <div class="d-flex">
                                    <label id="label-password" class="form-label d-block {{ !$edit ? 'required' : '' }}"
                                        for="password">
                                        Password
                                    </label>

                                    <div class="d-inline-block form-check form-switch px-5">
                                        <input id="toggle-password" class="form-check-input" name="toggle-password"
                                            type="checkbox" tabindex="-1" onchange="togglePassword(event, 'password')">
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

                            <div class="d-flex mt-4 gap-2">
                                <a class="btn btn-light" type="submit" href="{{ route('cms.users.index') }}">
                                    Back
                                </a>

                                <button class="btn btn-primary" type="submit">
                                    {{ !$edit ? 'Submit' : 'Update' }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-scripts')
    @if (!$edit)
        {!! JsValidator::formRequest('App\Http\Requests\CMS\User\StoreRequest', '#form-user') !!}
    @else
        {!! JsValidator::formRequest('App\Http\Requests\CMS\User\UpdateRequest', '#form-user') !!}
    @endif
@endpush
