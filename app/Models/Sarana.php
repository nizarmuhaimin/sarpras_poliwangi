<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sarana extends Model
{
    use HasFactory;
    
/**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    public $fillable = [
        'nama',
        'deskripsi',
        'sarana_photo_path',
        
];
}
