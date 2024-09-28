<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TambahSarpras extends Model
{
    use HasFactory;
/**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    public $fillable = [
        'nama_sarana',
        'nama_prasarana',
        'nama_kendaraan',
        'nopol',
        'jenis',
        'type',
        'foto',
        'deskripsi',
        'stok_awal',
        'stok_tersedia',
];

}
