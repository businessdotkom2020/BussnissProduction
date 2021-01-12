<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            'title'             =>  'required',
            'description'       =>  'required',
            'year_experience'   =>  'required',
            'career_level'      =>  'required',
            'open_positions'    =>  'required',
            'job_address'       =>  'required',
            'date_announced'    =>  'required',
            'salary'            =>  'required',
 
        
        ];
    }
}
