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
        Schema::create('peminjaman_forms', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('kegiatan');
            $table->dateTime('tgl_waktu_peminjaman')->default(now());
            $table->dateTime('tgl_waktu_pengembalian');
            $table->string('tempat_kegiatan');
            $table->string('nama_user');
            $table->string('email_user');
            $table->string('status');
            $table->string('users_id');
            $table->string('sarana_id');
            $table->string('jenis');
            $table->string('foto_awal');
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
        Schema::dropIfExists('peminjaman_forms');
    }
};
