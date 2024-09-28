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
        Schema::create('pengembalian_kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('kegiatan');
            $table->string('tujuan');
            $table->string('SIM_KTP');
            $table->dateTime('tgl_waktu_peminjaman');
            $table->dateTime('tgl_waktu_pengembalian')->default(now());
            $table->string('nama_user');
            $table->string('email_user');
            $table->string('status');
            $table->string('users_id');
            $table->string('kendaraan_id');
            $table->string('foto_akhir');
            $table->string('jenis');
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
        Schema::dropIfExists('pengembalian_kendaraans');
    }
};
