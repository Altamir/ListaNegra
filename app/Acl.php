<?php

namespace ListaNegra;

use Illuminate\Database\Eloquent\Model;

class Acl extends Model
{
     protected $table = 'acl';
     
     protected $fillable = ['nome'];
     
     public function user(){
         return $this->hasOne(User::class,'id','acl');
     }
}
