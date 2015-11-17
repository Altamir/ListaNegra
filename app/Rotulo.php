<?php

namespace ListaNegra;

use Illuminate\Database\Eloquent\Model;

class Rotulo extends Model
{
    
    protected $table = 'rotulos';
     
    protected $fillable = ['name','cor','descriDefaul'];
    
    public function hospedes(){
        return $this->belongsToMany(Hospede::class,'hospedes_rotulos','rotulo_id');
    }
}
