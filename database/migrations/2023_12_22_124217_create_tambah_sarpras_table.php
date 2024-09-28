<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tambah_sarpras', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sarana')->default('kosong');
            $table->string('nama_prasarana')->default('kosong');
            $table->string('nama_kendaraan')->default('kosong');
            $table->string('nopol')->default('kosong');
            $table->string('tipe')->default('kosong');
            $table->string('jenis')->default('8
            ');
            $table->string('foto')->default('kosong');
            $table->string('deskripsi')->default('kosong');
            $table->string('stok_awal')->default('1');
            $table->string('stok_tersedia')->default('1');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tambah_sarpras');
    }
};
