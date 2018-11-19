<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            "username"=>"required",
            'password' => 'required',
            "fullname"=>"required",
            "email"=>"required|email",
            "macaddress"=>"required",
        ];
    }
    public function messages(){
        return [
            'username.required' => 'Trường này không được để trống',
            'password.required' => 'Trường này không được để trống',
            'fullname.required' => 'Trường này không được để trống',
            'email.required' => 'Trường này không được để trống',
            'email.email' => 'Email không hợp lệ',
            'macaddress.required' => 'Trường này không được để trống',

        ];
    }
}
