<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
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
        $rules = [];
        switch($this->method())
        {
            case 'POST':
                {
                    $rules = [
                        'name'   => 'required|min:5|max:20|',
                        'email'           => 'required|email|unique:branches,email',
                        'mobile'          => 'required|string|min:9|max:20|unique:branches,mobile',
                        'hotline'      => 'required|string|min:4|max:20|unique:branches,land_line',
                        'user_id'      => 'required',
                        "address"         => "required|string",
                        "lng"         => "required",
                        "lat"         => "required",
                    ];
                }
                break;
            case 'PATCH':
                {
                    $rules = [
                        'name'   => 'required|min:5|max:20|',
                        'email'           => 'required|email',
                        'mobile'          => 'required|string|min:9|max:20',
                        'hotline'      => 'required|string|min:4|max:20',
                        'user_id'      => 'required',
                        "address"         => "required|string",
                    ];
                }
                break;
            default:
                break;
        }
        return $rules;

    }
}
