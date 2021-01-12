<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserInfoRequest extends FormRequest
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
            'name'        => 'required|string|min:5|max:20|',
            'email'       => 'required|email|unique:users,email,'.auth()->user()->id,
            'mobile'      => 'required|string|min:9|max:20|unique:users,mobile,'.auth()->user()->id,
            'whatsapp_mobile'      => 'min:9|max:20|unique:users,whatsapp_mobile,'.auth()->user()->id,
            'image'       => 'image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ];
    }
}
