<?php

namespace ListaNegra;

use Illuminate\Database\Eloquent\Model;

class Hospede extends Model
{
     
     protected $fillable = ['name','telefone','user_id'];

     public function documento()
     {
          return $this->hasOne(Documento::class);
     }

     public function user(){
         return $this->hasOne(User::class,'id','user_id');
     }

     public function rotulos(){
          return $this->belongsToMany(Rotulo::class,'hospedes_rotulos')
              ->withPivot('descri');
     }
}
