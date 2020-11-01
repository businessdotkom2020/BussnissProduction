<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStoreInfoRequest extends FormRequest
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
            'name'            => 'min:5|max:20|',
            'email'           => 'email|unique:users,email,'.auth()->user()->id,
            'mobile'          => '|min:9|max:20|unique:users,mobile,'.auth()->user()->id,
            'hot_number'      => '|min:9|max:20|unique:users,mobile,'.auth()->user()->id,
            'whatsapp_mobile' => '|min:9|max:20|unique:users,whatsapp_mobile,'.auth()->user()->id,
            'country_id'      => 'exists:countries,id',
            'state_id'        => 'exists:states,id',
            'city_id'         => 'exists:cities,id',
            "category_ids"    => "array|min:1",
            "category_ids.*"  => "string|distinct|min:1|exists:categories,id",
            // "street_nom"      => "string",
            // "address"         => "string",
            // "lat"             => "string",
            // "lang"            => "string",
            // "zip_code"        => "string",
        ];
    }
}
