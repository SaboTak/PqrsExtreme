<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdatePqrRequest extends FormRequest
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
        ];
    }

    public function authorize()
    {
        return Gate::allows('user_access');
    }
}
