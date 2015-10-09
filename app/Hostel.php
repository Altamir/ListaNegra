<?php

namespace ListaNegra;

use Illuminate\Database\Eloquent\Model;
use ListaNegra\User;


class Hostel extends Model
{
    
     protected $table = 'hostel';
     
     protected $fillable = ['telefone','user_id','descri'];
    //

    public function usuario(){
        return  $this->hasOne(User::class,'id');
    }
    
}
