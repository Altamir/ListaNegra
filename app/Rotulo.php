<?php

namespace ListaNegra;

use Illuminate\Database\Eloquent\Model;

class Rotulo extends Model
{
    
    protected $table = 'rotulos';
     
    protected $fillable = ['name','cor','descri'];
    
    
}
