<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index(): View
    {
        return view('modules.pasien.create-or-edit');
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
