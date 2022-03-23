<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCitizenRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
//            'status_id' => 'required|numeric',
            'first_name' => 'required|string',
            'middle_name' => 'required|string',
            'last_name' =>  'required|string',
            'contact' => 'required|string',
            'gender' => 'required|string',
            'dob' => 'required',
            'status' => 'required',
            'citizenship' => 'required|string',
            'occupation' => 'required|string',
            'zone' => 'required|string',
            'address' => 'required|string',
        ];
    }
}
