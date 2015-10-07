<?php

namespace ListaNegra;

use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    
     protected $table = 'hostel';
     
     protected $fillable = ['telefone','user_id','descri'];
    //
    public function usuario(){
        
        return $this->hasOne('app/User');
    }
}
