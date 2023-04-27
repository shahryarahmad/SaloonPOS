<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AuthRequest extends FormRequest
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
            // 'id' => 'required | int',
            'email' => 'required | string',
            'password' => 'required | string',
        ];
    }
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            redirect()->route('authentication')
            ->withErrors( $validator->errors())
            ->withInput()

        );


    }
    public function messages()
    {
        return [
            'id.required' => 'The ID is required',
            'id.integer' => 'The ID must be an integer',
            'dayInOut.required' => 'The dayInOut field is required',
        ];
    }
}
