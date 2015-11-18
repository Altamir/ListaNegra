<?php

namespace ListaNegra;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{

    protected $fillable = ['nome','numero','hospede_id'];

    public function hospede(){
        return $this->belongsTo(Hospede::class,'hospede_id');
    }
}
