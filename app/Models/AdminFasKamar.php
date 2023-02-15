<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminFasKamar extends Model
{
   protected $table = 'admin_fas_kamar';
    protected $guarded = ['id'];
    use HasFactory;

      public function AdminKamar()
    {
        return $this->belongsTo(AdminKamar::class, 'tipe_kamar_id', 'id');
    }
}
