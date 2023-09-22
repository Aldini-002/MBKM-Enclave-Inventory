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
        Schema::create('furniture', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('nama');
            $table->string('ukuran_kubus');
            $table->string('ukuran_lingkaran');
            $table->string('ukuran_packing');
            $table->decimal('harga', 8, 2);
            $table->foreignId('kategori_id')->index();
            // $table->foreignId('penerapan_id')->index();
            // $table->foreignId('material_id')->index();
            $table->foreignId('packing_id')->index();
            // $table->foreignId('warna_id')->index();
            $table->foreignId('opsi_pembayaran_id')->index();
            $table->foreignId('tema_id')->index();
            $table->foreignId('pelabuhan_id')->index();
            // $table->foreignId('riwayat_stok_id')->index();
            $table->string('proses_pengerjaan');
            $table->string('waktu_pengiriman');
            $table->integer('sisa_stok');
            $table->timestamps();
        });
    }
    // ->constrained()->onUpdate('cascade')->onDelete('cascade')
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('furniture');
    }
};
