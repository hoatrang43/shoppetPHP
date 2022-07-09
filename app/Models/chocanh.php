<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chocanh extends Model
{
    use HasFactory;
    protected $table='cho_canh';
    public function giongcho(){
        return $this->belongsTo(giongcho::class, 'id_giong');
    }
}
