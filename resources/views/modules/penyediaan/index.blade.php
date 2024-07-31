@php
    use App\Constants\StatusBerkas;
@endphp

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
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        <span class="text-dark whitespace-nowrap">No RM</span>
                                    </th>
                                    <th class="text-center">
                                        <span class="text-dark whitespace-nowrap">Nama Pasien</span>
                                    </th>
                                    <th class="text-center">
                                        <span class="text-dark whitespace-nowrap">Nama Peminjam</span>
                                    </th>
                                    <th class="text-center">
                                        <span class="text-dark whitespace-nowrap">Ruangan</span>
                                    </th>
                                    <th class="text-center">
                                        <span class="text-dark whitespace-nowrap">No Telp Ruangan</span>
                                    </th>
                                    <th class="text-center">
                                        <span class="text-dark whitespace-nowrap">Tujuan Peminjaman</span>
                                    </th>
                                    <th class="text-center">
                                        <span class="text-dark whitespace-nowrap">Tgl Peminjaman</span>
                                    </th>
                                    <th class="text-center">
                                        <span class="text-dark whitespace-nowrap">Status Berkas</span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="row-form">
                                    <form id="penyediaan-form" onsubmit="submitPenyediaanForm(event)">
                                        <td style="min-width: 150px;">
                                            <input class="form-control form-control-sm" type="text">
                                        </td>

                                        <td style="min-width: 150px;">
                                            <input class="form-control form-control-sm" type="text">
                                        </td>

                                        <td style="min-width: 150px;">
                                            <input class="form-control form-control-sm" type="text">
                                        </td>

                                        <td style="min-width: 150px;">
                                            <input class="form-control form-control-sm" type="text">
                                        </td>

                                        <td style="min-width: 150px;">
                                            <input class="form-control form-control-sm" type="text">
                                        </td>

                                        <td style="min-width: 150px;">
                                            <input class="form-control form-control-sm" type="text">
                                        </td>

                                        <td style="min-width: 150px;">
                                            <input class="form-control form-control-sm" type="date">
                                        </td>

                                        <td style="min-width: 200px;">
                                            <select id="gender" class="form-select form-select-sm" name="jns_kel"
                                                aria-disabled="true">
                                                <option selected disabled>Status Berkas</option>

                                                @foreach (StatusBerkas::values() as $status)
                                                    <option value="{{ $status }}">{{ $status }}</option>
                                                @endforeach
                                            </select>
                                        </td>

                                        <td style="min-width: 200px;" class="border-bottom-0">
                                            <button type="submit" class="btn btn-primary">
                                                Simpan
                                            </button>
                                        </td>
                                    </form>
                                </tr>

                                @foreach (range(1, 10) as $item)
                                    <tr>
                                        <td class="text-center">{{ $item }}</td>
                                        <td class="text-center">{{ $item }}</td>
                                        <td class="text-center">{{ $item }}</td>
                                        <td class="text-center">{{ $item }}</td>
                                        <td class="text-center">{{ $item }}</td>
                                        <td class="text-center">{{ $item }}</td>
                                        <td class="text-center">{{ $item }}</td>
                                        <td class="text-center">{{ $item }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-scripts')
    <script src="{{ asset('assets/js/pages/penyediaan.min.js') }}"></script>
@endpush
