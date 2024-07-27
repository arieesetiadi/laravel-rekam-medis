<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PeminjamController extends Controller
{
    public function index(): View
    {
        return view('modules.peminjam.index');
    }
}
