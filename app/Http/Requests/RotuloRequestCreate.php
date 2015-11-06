<?php

namespace ListaNegra\Http\Requests;

use ListaNegra\Http\Requests\Request;

class RotuloRequestCreate extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => array('required','min:3'),
            'cor'  => array('required','regex:/(?:#)(?:[0-9a-fA-F]{2}){3,4}/'),
            'descriDefaul' => array('required'),
        ];
    }
}
