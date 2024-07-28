@php
    use App\Constants\Gender;
@endphp

@extends('layouts.master')

@push('after-meta')
    <title>Data Peminjam | {{ config('app.name') }}</title>
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-description d-flex align-items-center px-0">
                    <div class="page-description-content flex-grow-1">
                        <h5 class="text-uppercase">Peminjaman</h5>
                        <h1 class="text-uppercase">Data Peminjam</h1>
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

                            {{-- Name --}}
                            <div class="col-12 mb-3">
                                <label id="label-nama" class="form-label d-block required" for="nama">
                                    Nama
                                </label>

                                <input id="nama" class="form-control mb-2" name="nama" type="text"
                                    placeholder="Nama">

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

                            {{-- KTP --}}
                            <div class="col-12 mb-3">
                                <label id="label-ktp" class="form-label d-block required" for="ktp">
                                    Bukti Diri
                                </label>

                                <input id="ktp" class="form-control mb-2" name="ktp" type="text"
                                    placeholder="Bukti diri/KTP">

                                @error('ktp')
                                    <span class="d-block text-danger" for="ktp">
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
