<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedagang extends Model
{
    // use HasFactory;
    public function lapaks(){
        return $this->hasOne(Lapak::class,'id','lapaks_id');
    }
    public function  pembayarans(){
        return $this->hasOne(pembayaran::class,'id');
    }
}
