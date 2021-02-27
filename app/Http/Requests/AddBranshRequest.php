<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBranshRequest extends FormRequest
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

            'name'             =>  'required',
            'email'            => 'required|email|unique:branches,email',
            'mobile'           => 'required|string|min:9|max:20|unique:branches,mobile',
            'land_line'        =>  'required',
            'work_from'        =>  'required',
            'work_to'          =>  'required',
            'delivery_from'    =>  'required',
            'delivery_to'      =>  'required',
            'address'          =>  'required',
            'delivery_fee'     =>  'required',
        ];
    }
}