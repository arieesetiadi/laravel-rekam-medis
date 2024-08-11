<?php

namespace App\Http\Controllers;

use App\Models\Penyediaan;
use Illuminate\Contracts\View\View;

class PenyediaanController extends Controller
{
    public function index(): View
    {
        return view('modules.penyediaan.index');
    }
}
