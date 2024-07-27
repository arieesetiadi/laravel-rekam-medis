@extends('layouts.master')

@push('after-meta')
    <title>Pasien | {{ config('app.name') }}</title>
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-description d-flex align-items-center px-0">
                    <div class="page-description-content flex-grow-1">
                        <h1 class="text-uppercase">Pasien</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
