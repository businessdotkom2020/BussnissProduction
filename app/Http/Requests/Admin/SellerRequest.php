<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SellerRequest extends FormRequest
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
                        'email'           => 'required|email|unique:users,email',
                        'mobile'          => 'required|string|min:9|max:20|unique:users,mobile',
                        'hotline'      => 'required|string|min:4|max:20|unique:users,hot_number',
                        "category_ids"    => "required|array|min:1",
                        "category_ids.*"  => "required|string|distinct|min:1|exists:categories,id",
                        'password'        => 'required|min:6|max:20',
                        'state_id'        => 'required|exists:states,id',
                        'city_id'         => 'required|exists:cities,id',
                        "street_no"      => "required|string",
                        'country_id'      => 'required|exists:countries,id',
                        "address"         => "required|string",
                        "zip_code"        => "required|string",
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
                        "category_ids"    => "required|array|min:1",
                        "category_ids.*"  => "required|string|distinct|min:1|exists:categories,id",
                        'password'        => 'nullable|min:6|max:20',
                        'state_id'        => 'required|exists:states,id',
                        'city_id'         => 'required|exists:cities,id',
                        "street_no"      => "required|string",
                        'country_id'      => 'required|exists:countries,id',
                        "address"         => "required|string",
                        "zip_code"        => "required|string",
                    ];
                }
                break;
            default:
                break;
        }
        return $rules;

    }
}
