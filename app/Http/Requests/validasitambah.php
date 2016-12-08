<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class validasitambah extends Request
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
            'nip_lecturer' => 'required',
            'name_lecturer' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nip_lecturer.required' => 'harus mengisi nip',
            'name_lecturer.required' => 'harus mengisi nama',
        ];
    }
}
