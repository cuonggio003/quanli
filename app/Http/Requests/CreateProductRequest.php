<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'category' =>'required',
            'price'=>'required',
            'amount'=>'required',
            'image'=>'required',
            'status'=>'required',
        ];
    }

    public function message(){
        return [
            'id.required' =>'Ai cho ông để trống',
            'name.required' =>'Ai cho ông để trống',
            'category.required' =>'Ai cho ông để trống',
            'price.required' =>'Ai cho ông để trống',
            'amount.required' =>'Ai cho ông để trống',
            'image.required' =>'Ai cho ông để trống',
            'status.required' =>'Ai cho ông để trống',
        ];
    }
}
