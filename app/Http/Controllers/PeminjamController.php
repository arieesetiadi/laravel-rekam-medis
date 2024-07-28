<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    public function index(): View
    {
        return view('modules.peminjam.create-or-edit');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
