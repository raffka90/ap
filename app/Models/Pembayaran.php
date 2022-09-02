<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    // use HasFactory;
    public function lapaks(){
        return $this->hasOne(Lapak::class,'id','lapaks_id');
    }
    // public function pedagangs(){
    //     return $this->hasOne(Pedagang::class,'id','pedagangs_id');
    // }
}
