<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'name'                     => 'required',
            'category_id'              => 'exists:categories,id',
            'description'              => 'required',
            'price'                    => 'required',
            'image'                    => 'image',
            'product_condition'        => 'required',
            'images'                   => 'required|array',
            'images.*'                 => 'image',
            'prices.*.price'           => 'nullable',
            'prices.*.quantity_from'   => 'required_with:prices.*.price',
            'prices.*.quantity_to'     => 'required_with:prices.*.quantity_from',

        ];
    }
}