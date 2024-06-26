<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PeminjamanController extends Controller
{
    public function index(): View
    {
        return view('modules.peminjaman.index');
    }
}
