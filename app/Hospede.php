<?php

namespace ListaNegra;

use Illuminate\Database\Eloquent\Model;

class Hospede extends Model
{
     
     protected $fillable = ['name','telefone','user_id'];

     public function user(){
          return $this->hasOne(User::class,'id','user_id');
     }
}
