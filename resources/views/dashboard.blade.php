@extends('layouts.master')

@push('after-meta')
    <title>Dashboard | {{ config('app.name') }}</title>
@endpush

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 75vh">
        <div>
            <img width="150" height="150" src="{{ asset('assets/images/icons/admin.png') }}" alt="Admin Icon" class="mb-2">

            <h1 class="text-uppercase text-center text-dark">Admin</h1>
        </div>
    </div>
@endsection
