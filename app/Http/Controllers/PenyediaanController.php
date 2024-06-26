<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PenyediaanController extends Controller
{
    public function index(): View
    {
        return view('modules.penyediaan.index');
    }
}
