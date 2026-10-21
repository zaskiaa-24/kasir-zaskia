<?php

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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('kode_transaksi',30)->unique();
            $table->string('siswa_id',20);
            $table->string('jenis_tagihan_id', 20);
            $table->string('guru_id', 20);
            $table->string('metode_pembayaran_id', 20);
            $table->decimal('jumlah_bayar', 15, 2);
            $table->date('tanggal_bayar');
            $table->text('keterangan')->nullable();
            $table->timestamp('created_at', 6)->nullable();
            $table->timestamp('updated_at', 6)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
