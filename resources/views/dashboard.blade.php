@extends('layouts.master')

@push('after-meta')
    <title>Dashboard | {{ config('app.name') }}</title>
@endpush

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 75vh">
        <img src="{{ asset('assets/images/icons/neptune.png') }}" alt="Main">
    </div>
@endsection
