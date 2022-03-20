<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoryRequest extends FormRequest
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
            'name' =>'required',
            'status' =>'required',
        ];
    }

    public function messages()
    {
        return [
            'id.required' =>'Ai cho ông để trống',
            'name.required' =>'Ai cho ông để trống',
            'status.required' =>'Ai cho ông để trống',
        ];
    }

}
