<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticleRequest extends FormRequest
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
            'g_name'=>'required|min:5',
            'g_company'=>'required',
            'g_producer'=>'required'
        ];
    }
   public function messages()
    {
        return [
            'g_name.required' => "遊戲名稱為必填",
            'g_company.required' => "公司名稱為必填",
            "g_producer.required" => "製作人為必填",

        ];
    }
}
