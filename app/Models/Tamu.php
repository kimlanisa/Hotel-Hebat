<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $table = 'tamu';
    protected $guarded = ['id'];
    use HasFactory;

      public function AdminKamar()
    {
        return $this->belongsTo(AdminKamar::class, 'tipe_kamar_id', 'id');
    }
}
