<?php

namespace ListaNegra;

use Illuminate\Database\Eloquent\Model;

class Acl extends Model
{
     protected $table = 'acl';
     
     protected $fillable = ['name'];
     
     public function users(){
          
         return $this->belongsTo(User::class,'id','acl');
         
     }
}
