<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminKamar extends Model
{
    protected $table = 'admin_kamar';
    protected $guarded = ['id'];
    use HasFactory;
 
    public function AdminFasKamar() {
        return $this->hasOne(AdminFasKamar::class, 'tipe_kamar_id', 'id');
    }
}
