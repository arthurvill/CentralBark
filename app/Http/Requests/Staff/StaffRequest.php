<?php

namespace App\Http\Requests\Staff;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
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
        return match ($this->method()) {
            'POST' => [
                'first_name' => ['required'],
                'middle_name' => ['sometimes'],
                'last_name' => ['required'],
                'sex' => ['required'],
                'email' => ['required', 'email', 'unique:users,email'],
            ],
            'PUT' => [
                'first_name' => ['required'],
                'middle_name' => ['sometimes'],
                'last_name' => ['required'],
                'sex' => ['required'],
                'email' => ['required', 'email', \Illuminate\Validation\Rule::unique('users')->ignore($this->staff->user)],
            ]
        };
    }

    public function messages()
    {
        return [
            'email.unique' => 'Email address has already been taken',
        ];
    }
}