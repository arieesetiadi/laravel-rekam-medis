<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('auth.login');
    }

    public function process(LoginRequest $request): RedirectResponse
    {
        if (!Auth::attempt($request->validated())) {
            swal(
                icon: 'error',
                title: 'Login Gagal',
                text: 'Email atau kata sandi tidak valid.'
            );

            return back();
        }

        swal(
            icon: 'success',
            title: 'Login Berhasil',
            text: 'Selamat datang di Dashboard.'
        );

        return redirect()->route('dashboard.index');
    }
}
