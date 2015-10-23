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
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:4',
            'telefone'=> 'required',
            'descri' => 'required|min:5'
        ];
    }
}
