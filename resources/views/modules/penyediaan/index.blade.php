@extends('layouts.master')

@push('after-meta')
    <title>Penyediaan | {{ config('app.name') }}</title>
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-description d-flex align-items-center px-0">
                    <div class="page-description-content flex-grow-1">
                        <h1 class="text-uppercase">Penyediaan</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body" style="width: 100%; overflow-x: scroll">
                        <livewire:penyediaan-table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
