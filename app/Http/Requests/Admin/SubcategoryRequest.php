<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SubcategoryRequest extends FormRequest
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
                        'name_ar' => 'required|max:100|min:1|string',
                        'name_en' => 'required|max:100|min:1|string',
                        'parent_id' => 'required',
                        'image' => 'required|mimes:jpg,jpeg,png,svg|max:5000',
                    ];
                }
                break;
            case 'PATCH':
                {
                    $rules = [
                        'name_ar' => 'required|max:100|min:1|string',
                        'name_en' => 'required|max:100|min:1|string',
                        'parent_id' => 'required',
                        'image' => 'mimes:jpg,jpeg,png,svg|max:5000',
                    ];
                }
                break;
            default:
                break;
        }
        return $rules;

    }
}
