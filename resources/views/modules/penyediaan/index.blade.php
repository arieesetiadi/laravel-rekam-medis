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
                                    <th>
                                        <span class="text-dark whitespace-nowrap">No RM</span>
                                    </th>
                                    <th>
                                        <span class="text-dark whitespace-nowrap">Nama Pasien</span>
                                    </th>
                                    <th>
                                        <span class="text-dark whitespace-nowrap">Nama Peminjam</span>
                                    </th>
                                    <th>
                                        <span class="text-dark whitespace-nowrap">Ruangan</span>
                                    </th>
                                    <th>
                                        <span class="text-dark whitespace-nowrap">No Telp Ruangan</span>
                                    </th>
                                    <th>
                                        <span class="text-dark whitespace-nowrap">Tujuan Peminjaman</span>
                                    </th>
                                    <th>
                                        <span class="text-dark whitespace-nowrap">Tgl Peminjaman</span>
                                    </th>
                                    <th>
                                        <span class="text-dark whitespace-nowrap">Status Berkas</span>
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr class="row-form">
                                    <form id="penyediaan-form" action="{{ route('penyediaan.store') }}" method="POST">
                                        @csrf

                                        <td style="min-width: 150px;">
                                            <input name="no_rm" required class="form-control form-control-sm"
                                                type="text" placeholder="No RM">
                                        </td>

                                        <td style="min-width: 150px;">
                                            <input name="nama_pasien" required class="form-control form-control-sm"
                                                type="text" placeholder="Pasien">
                                        </td>

                                        <td style="min-width: 150px;">
                                            <input name="nama_peminjam" required class="form-control form-control-sm"
                                                type="text" placeholder="Peminjam">
                                        </td>

                                        <td style="min-width: 150px;">
                                            <input name="ruangan" required class="form-control form-control-sm"
                                                type="text" placeholder="Ruangan">
                                        </td>

                                        <td style="min-width: 150px;">
                                            <input name="no_telp_ruangan" required class="form-control form-control-sm"
                                                type="text" placeholder="No. Telepon">
                                        </td>

                                        <td style="min-width: 150px;">
                                            <input name="tujuan" required class="form-control form-control-sm"
                                                type="text" placeholder="Tujuan">
                                        </td>

                                        <td style="min-width: 150px;">
                                            <input name="tgl_peminjaman" required class="form-control form-control-sm"
                                                type="date">
                                        </td>

                                        <td style="min-width: 200px;">
                                            <select name="status_berkas" required class="form-select form-select-sm"
                                                name="jns_kel" aria-disabled="true">
                                                <option selected disabled value="">Status Berkas</option>

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

                                @forelse ($penyediaan as $item)
                                    <tr>
                                        <td>{{ $item->no_rm ?? '-' }}</td>
                                        <td>{{ $item->nama_pasien ?? '-' }}</td>
                                        <td>{{ $item->nama_peminjam ?? '-' }}</td>
                                        <td>{{ $item->ruangan ?? '-' }}</td>
                                        <td>{{ $item->no_telp_ruangan }}</td>
                                        <td>{{ $item->tujuan ?? '-' }}</td>
                                        <td>{{ $item->tgl_peminjaman ?? '-' }}</td>
                                        <td>{{ $item->status_berkas ?? '-' }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8">
                                            <span class="d-inline-block text-dark mt-5">
                                                Data penyediaan belum tersedia
                                            </span>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
