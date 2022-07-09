<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phukien extends Model
{
    use HasFactory;
    protected $table='phu_kien';
    public function loaiphukien(){
        return $this->belongsTo(loaiphukien::class, 'id_lpk');
    }
}
