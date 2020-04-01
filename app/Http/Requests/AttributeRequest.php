<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AttributeRequest extends FormRequest
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
            'name_en'           =>  'required|unique:parts_bazar',
            'name_bn'           =>  'required|unique:parts_bazar',
            'attribute_type'    =>  'required',
        ];
    }


    public function messages() 
    {
        return [
            'name_en.required'          =>  'Attribure name (eng) is required.',
            'name_en.unique'            =>  'Attribure name (eng) must be unique.',
            'name_bn.required'          =>  'Attribure name (bd) is required.',
            'name_bn.unique'            =>  'Attribure name (bd) must be unique.',
            'attribute_type.required'   =>  'Attribure type is required.',
        ];
    }
}
