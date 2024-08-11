<?php

namespace App\Http\Controllers;

use App\Http\Requests\Penyediaan\StoreRequest;
use App\Models\Penyediaan;
use Illuminate\Contracts\View\View;

class PenyediaanController extends Controller
{
    public function index(): View
    {
        $penyediaan = Penyediaan::latest('tgl_dibuat')->get();

        return view('modules.penyediaan.index', compact('penyediaan'));
    }

    public function store(StoreRequest $request)
    {
        $penyediaan = Penyediaan::create($request->dataPenyediaan());

        if (!$penyediaan) {
            swal(
                icon: 'error',
                title: 'Gagal',
                text: 'Gagal menambah data penyediaan.'
            );

            return back();
        }

        swal(
            icon: 'success',
            title: 'Berhasil',
            text: 'Berhasil menambah data penyediaan.'
        );

        return redirect()->route('penyediaan.index');
    }
}
