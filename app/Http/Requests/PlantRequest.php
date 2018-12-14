<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlantRequest extends FormRequest
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
            "name"=>"required|min:5|max:255",
            'temp' => 'required|integer|max:100',
            "humadity"=>"required|integer|max:100",
            "light"=>"required|integer|max:100",
            
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Trường này không được để trống',
            'name.min' => 'Vui lòng nhập lớn hơn 5 kí tự',
            'name.max' => 'Vui lòng nhập nhỏ hơn 255 kí tự',
            'temp.max' => 'Vui lòng nhập nhỏ hơn 100',
            'humadity.max' => 'Vui lòng nhập nhỏ hơn 100',
            'light.max' => 'Vui lòng nhập nhỏ hơn 100',
            'temp.required' => 'Trường này không được để trống',
            'temp.integer' => 'Trường này chỉ được nhập số',
            'humadity.integer' => 'Trường này chỉ được nhập số',
            'light.integer' => 'Trường này chỉ được nhập số',
            'humadity.required' => 'Trường này không được để trống',
            'light.required' => 'Trường này không được để trống',

        ];
    }
}
