<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KeyRequest extends FormRequest
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
            'license' => 'required',
            'status' => 'required',
            
        ];
    }
    public function messages(){
        return [
        'license.required' => 'Bắt Buộc Nhập',
        'status.required' => 'Bắt Buộc Nhập',
        ];
    }
}