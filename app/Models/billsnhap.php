<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class billsnhap extends Model
{
    use HasFactory;
    protected $table='bills_nhap';
    public function nhacungcap(){
        return $this->belongsTo(nhacungcap::class,'id_ncc');
    }
    public function nhanvien(){
        return $this->belongsTo(nhanvien::class,'id_nv');
    }
}
