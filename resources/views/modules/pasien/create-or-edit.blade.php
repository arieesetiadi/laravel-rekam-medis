@php
    use App\Constants\Gender;
@endphp

@extends('layouts.master')

@push('after-meta')
    <title>Data Pasien | {{ config('app.name') }}</title>
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-description d-flex align-items-center px-0">
                    <div class="page-description-content flex-grow-1">
                        <h5 class="text-uppercase">Peminjaman</h5>
                        <h1 class="text-uppercase">Data Pasien</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <form id="peminjam-form" class="row" action="{{ route('peminjam.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            {{-- Nomor Rekam Medis Pasien --}}
                            <div class="col-12 mb-3">
                                <label id="label-no-rm" class="form-label d-block required" for="no-rm">
                                    Nomor Rekam Medis Pasien
                                </label>

                                <input id="no-rm" class="form-control mb-2" name="no_rm" type="text"
                                    placeholder="Nomor Rekam Medis Pasien">

                                @error('no_rm')
                                    <span class="d-block text-danger" for="no-rm">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            {{-- Name --}}
                            <div class="col-12 mb-3">
                                <label id="label-nama" class="form-label d-block required" for="nama">
                                    Nama Pasien
                                </label>

                                <input id="nama" class="form-control mb-2" name="nama" type="text"
                                    placeholder="Nama Pasien">

                                @error('nama')
                                    <span class="d-block text-danger" for="nama">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            {{-- Jenis Kelamin --}}
                            <div class="col-12 mb-3">
                                <label id="label-gender" class="form-label d-block required" for="gender">
                                    Jenis Kelamin
                                </label>

                                <select id="gender" class="form-select mb-2" name="jns_kel" aria-disabled="true">
                                    <option selected disabled>Jenis Kelamin</option>

                                    @foreach (Gender::values() as $gender)
                                        <option value="{{ $gender }}" @selected($gender == old('jns_kel', $user->gender ?? null))>
                                            {{ $gender }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('jns_kel')
                                    <span class="d-block text-danger" for="gender">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            {{-- Umur --}}
                            <div class="col-12 mb-3">
                                <label id="label-usia" class="form-label d-block required" for="usia">
                                    Umur
                                </label>

                                <input id="usia" class="form-control mb-2" name="usia" type="text"
                                    placeholder="Umur">

                                @error('usia')
                                    <span class="d-block text-danger" for="usia">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            {{-- Alamat --}}
                            <div class="col-12 mb-3">
                                <label id="label-alamat" class="form-label d-block required" for="alamat">
                                    Alamat
                                </label>

                                <input id="alamat" class="form-control mb-2" name="alamat" type="text"
                                    placeholder="Alamat">

                                @error('alamat')
                                    <span class="d-block text-danger" for="alamat">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            {{-- Kepentingan --}}
                            <div class="col-12 mb-3">
                                <label id="label-kepentingan" class="form-label d-block required" for="kepentingan">
                                    Untuk Kepentingan
                                </label>

                                <input id="kepentingan" class="form-control mb-2" name="kepentingan" type="text"
                                    placeholder="Untuk Kepentingan">

                                @error('kepentingan')
                                    <span class="d-block text-danger" for="kepentingan">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="d-flex mt-4 gap-2">
                                <button class="btn btn-primary" type="submit">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
