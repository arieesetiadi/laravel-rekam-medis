<?php

use App\Constants\StatusBerkas;
use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penyediaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('no_rm');
            $table->string('nama_pasien');
            $table->string('nama_peminjam');
            $table->string('ruangan');
            $table->string('no_telp_ruangan');
            $table->string('tujuan');
            $table->date('tgl_peminjaman');
            $table->date('tgl_dibuat')->default(Carbon::now());
            $table->enum('status_berkas', [StatusBerkas::SEDANG_DICARI, StatusBerkas::TERSEDIA]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyediaan');
    }
};
