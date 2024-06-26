<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LogoutController extends Controller
{
    public function process(): RedirectResponse
    {
        return redirect()->route('login.index');
    }
}
