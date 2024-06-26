@use('App\Constants\GeneralStatus', 'GeneralStatus')

@extends('cms.layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="page-description d-flex align-items-center px-0">
                    <div class="page-description-content flex-grow-1">
                        <h1>{{ $title }}</h1>
                    </div>

                    <div class="page-description-actions">
                        <a class="btn btn-primary" href="{{ route('cms.users.create') }}">
                            Create {{ singularize($title) }}
                        </a>

                        <a class="btn btn-success" href="{{ route('cms.users.excel') }}" target="_blank">
                            Export Excel
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="w-100 datatable table">
                            <thead>
                                <tr>
                                    <th class="text-center">Actions</th>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td class="d-flex justify-content-center">
                                            <div class="btn-group dropend">
                                                <button type="button" class="btn btn-sm btn-light dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Actions
                                                </button>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <form action="{{ route('cms.users.edit', $user->id) }}"
                                                            method="GET">
                                                            <button class="btn btn-sm btn-outline-dark dropdown-item" type="submit">
                                                                Edit
                                                            </button>
                                                        </form>
                                                    </li>

                                                    <li>
                                                        <form onsubmit="formConfirm(event)"
                                                            action="{{ route('cms.users.toggle', $user->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            <button class="btn btn-sm btn-outline-dark dropdown-item" type="submit">
                                                                {{ $user->status ? 'Inactivate' : 'Activate' }}
                                                            </button>
                                                        </form>
                                                    </li>

                                                    <li>
                                                        <form onsubmit="formConfirm(event)"
                                                            action="{{ route('cms.users.destroy', $user->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-sm btn-outline-dark dropdown-item" type="submit">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="text-nowrap">{{ $loop->iteration }}</td>
                                        <td class="text-nowrap">{{ $user->name }}</td>
                                        <td class="text-nowrap">{{ $user->email }}</td>
                                        <td class="text-nowrap">{{ $user->role->name }}</td>
                                        <td class="text-nowrap">{!! GeneralStatus::htmlLabel($user->status) !!}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="6">
                                            Data is not available right now.
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
