<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PasienController extends Controller
{
    public function index(): View
    {
        return view('modules.pasien.index');
    }
}
