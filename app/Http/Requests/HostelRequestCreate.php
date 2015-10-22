<?php

namespace ListaNegra\Http\Requests;

use ListaNegra\Http\Requests\Request;

class HostelRequestCreate extends Request
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
            'name' => 'required|unique:users|min:3',
            'email' => 'required|email',
            'telefone'=> 'required|regex:-?[0-9]*(\.[0-9]+)',
            'descri' => 'required|min:5'
        ];
    }
}
