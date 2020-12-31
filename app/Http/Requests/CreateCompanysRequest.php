<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCompanysRequest extends FormRequest
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
            'cp_name'=>'required|min:5',
            'country'=>'required'
        ];
    }

   public function messages()
    {
        return [
            'cp_name.required' => "製作公司名稱為必填",
            'country.required' => "國家名稱為必填",
        ];
    }
}
