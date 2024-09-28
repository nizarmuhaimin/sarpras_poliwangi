<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeminjamanForm extends Model
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
        'tgl_waktu_peminjaman',
        'tgl_waktu_pengembalian',
        'tempat_kegiatan',
        'nama_user',
        'email_user',
        'status',
        'user_id',
        'sarana_id',
        'jenis',
        'foto_awal'
];

}
