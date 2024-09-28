<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','nama_kendaraan', 'jenis_jeniskendaraan', 'harga', 'deskripsi', 'jumlah_kursi', 'bahan_bakar', 'jenis_transmisi', 'mobil_photo_path' 
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\Users');
    }

    public function InversTransaksi(){

        return $this->belongsTo(Transaction::class);
    }
}
