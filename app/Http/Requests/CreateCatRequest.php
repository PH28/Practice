<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCatRequest extends FormRequest
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
            'name' => 'required|between:5,10|unique:cats,name',
            'breed_id' => 'required|numeric',
            // 'dob' => 'date_format:"YYYY-mm-dd"'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Tên mèo phải nhập',
            'name.between' => 'tên phải >5 và <10',
            'name.min' => 'tên phải hơn 5 kí tự',
            // 'dob.date_format' => 'sai format'
        ];
    }
}
