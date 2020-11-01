<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditBranshRequest extends FormRequest
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
            'email'            =>  'required|unique:branches,email,'.$this->id,
            'mobile'           =>  'required',
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
