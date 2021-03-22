<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StorePqrRequest extends FormRequest
{
    public function rules()
    {
        return [
            'ID' ,
            'PQR'     => [
                'string',
                'required',
            ],
            'Asunto_PQR'    => [
                'required',
            ],
            'Usuario' => [
                'required',
            ],
            'Estado'  => [
                'required',
            ],
            'expires_at'
        ];
    }

    public function authorize()
    {
        return Gate::allows('user_access');
    }
}

