<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class billsban extends Model
{
    use HasFactory;
    protected $table='bills_ban';
    public function khach(){
        return $this->belongsTo(khachhang::class,'id_kh');
    }
}
