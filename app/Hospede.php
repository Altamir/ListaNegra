<?php

namespace ListaNegra;

use Illuminate\Database\Eloquent\Model;

class Hospede extends Model
{
     
     protected $fillable = ['name','telefone','user_id'];
    
}
