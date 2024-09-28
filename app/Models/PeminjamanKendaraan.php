<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanKendaraan extends Model
{
    use HasFactory;
/**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    public $fillable = [
        'nim',
        'kegiatan',
        'tujuan',
        'SIM_KTP',
        'tgl_waktu_peminjaman',
        'tgl_waktu_pengembalian',
        'nama_user',
        'email_user',
        'status',
        'user_id',
        'kendaraan_id',
        'foto_awal',
        'jenis',
];

}

