<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUsersRequest extends FormRequest
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
            'name'        => 'required|min:5|max:20|',
            'email'       => 'required|email|unique:users,email',
            'mobile'      => 'required|string||unique:users,mobile',
            'country_id'  => 'required|exists:countries,id',
            'password'    => 'required|min:6|max:20|confirmed'
        ];
    }
}
