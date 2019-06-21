<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EntranceRequest extends FormRequest
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
            'name' => 'required',
            'school' => 'required',
            'phone' => 'required|max:10',
            'email' => 'required|email',
            'gpa' => 'required',
            'address' => 'required',
            'faculty_id' => 'required',
            'level_id' => 'required',
            'dob' => 'required',
            'image' => 'required|mimes:jpg,jpeg,bmp,png',
            'gender' => 'required'
        ];
    }
}
