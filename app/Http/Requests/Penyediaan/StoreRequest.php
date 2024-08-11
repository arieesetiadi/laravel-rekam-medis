<?php

namespace App\Http\Requests\Penyediaan;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
        ];
    }

    public function dataPenyediaan(): array
    {
        return [
            'user_id' => Auth::user()->id,
            'no_rm' => $this->no_rm,
            'nama_pasien' => $this->nama_pasien,
            'nama_peminjam' => $this->nama_peminjam,
            'ruangan' => $this->ruangan,
            'no_telp_ruangan' => $this->no_telp_ruangan,
            'tujuan' => $this->tujuan,
            'tgl_peminjaman' => Carbon::make($this->tgl_peminjaman),
            'tgl_dibuat' => Carbon::now(),
            'status_berkas' => $this->status_berkas,
        ];
    }
}
