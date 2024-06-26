@extends('layouts.master')

@push('after-meta')
    <title>Dashboard | {{ config('app.name') }}</title>
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-description px-0">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-6 col-lg-6">
                <div class="card widget widget-stats">
                    <div class="card-body">
                        <div class="widget-stats-container d-flex">
                            <div class="widget-stats-icon widget-stats-icon-primary">
                                <i class="material-icons-outlined">person</i>
                            </div>

                            <div class="widget-stats-content flex-fill">
                                <span class="widget-stats-title">Total Customers</span>
                                <span class="widget-stats-amount">123</span>
                                <span class="widget-stats-info">141 Orders Total</span>
                            </div>

                            <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                                <i class="material-icons">keyboard_arrow_up</i> 4%
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-6">
                <div class="card widget widget-stats">
                    <div class="card-body">
                        <div class="widget-stats-container d-flex">
                            <div class="widget-stats-icon widget-stats-icon-primary">
                                <i class="material-icons-outlined">person</i>
                            </div>

                            <div class="widget-stats-content flex-fill">
                                <span class="widget-stats-title">Total Administrators</span>
                                <span class="widget-stats-amount">321</span>
                                <span class="widget-stats-info">141 Orders Total</span>
                            </div>

                            <div class="widget-stats-indicator widget-stats-indicator-positive align-self-start">
                                <i class="material-icons">keyboard_arrow_up</i> 4%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card widget widget-stats-large">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="widget-stats-large-chart-container">
                                <div class="card-header">
                                    <h5 class="card-title">Earnings
                                        <span class="badge badge-light badge-style-light">
                                            Last Year
                                        </span>
                                    </h5>
                                </div>

                                <div class="card-body">
                                    <div id="chart"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="widget-stats-large-info-container">
                                <div class="card-header">
                                    <h5 class="card-title">
                                        Report
                                        <span class="badge badge-info badge-style-light">
                                            Updated 5 min ago
                                        </span>
                                    </h5>
                                </div>

                                <div class="card-body">
                                    <p class="card-description">Duis fringilla eget velit sit amet lobortis. Donec rutrum,
                                        arcu auctor varius cursus. mi nulla dapibus justo, at volutpat libero</p>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Neptune - v1.0<span class="float-end text-success">14%<i
                                                    class="material-icons align-middle">keyboard_arrow_up</i></span></li>
                                        <li class="list-group-item">Space - v1.2<span class="float-end text-danger">7%<i
                                                    class="material-icons align-middle">keyboard_arrow_down</i></span></li>
                                        <li class="list-group-item">Lime - v1.0.3<span class="float-end text-success">21%<i
                                                    class="material-icons align-middle">keyboard_arrow_up</i></span></li>
                                        <li class="list-group-item">Circl - v2.3<span class="float-end text-success">17%<i
                                                    class="material-icons align-middle">keyboard_arrow_up</i></span></li>
                                        <li class="list-group-item">Connect - v1.7<span class="float-end text-danger">3%<i
                                                    class="material-icons align-middle">keyboard_arrow_down</i></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-scripts')
    <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.min.js') }}"></script>
@endpush
