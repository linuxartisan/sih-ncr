<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        // get the current user object
        $user = $this->route('user');

        return [
            'identifier' => [
                'nullable',
                'max:20',
                Rule::unique('users', 'identifier')->ignore(@$user->id)
            ],
            'name' => [
                'required',
                'max:255'
            ],
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users', 'email')->ignore(@$user->id)
            ],
            'mobile' => [
                'nullable',
                'digits:10'
            ]
        ];
    }

    /**
     * Define custom messages for validation rules
     *
     * @return array
     */
    public function messages()
    {
        return [
            'identifier.unique' => 'The identifier already exists',
            'name.required' => 'The Name field is required',
        ];
    }
}
