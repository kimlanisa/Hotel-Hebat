<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminFasHotel extends Model
{
   protected $table = 'admin_fas_hotel';
    protected $guarded = ['id'];
    protected $fillable = [
        'id', 'nama_fas_hotel', 'ket_fas_hotel', 'gambar'
    ];
}
