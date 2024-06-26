<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'username' => 'required|string|max:50',
            'email' => 'required|email|unique:users,email,' . $this->route('id'),
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'is_active' => 'required|boolean',
            'services' => 'array',
            'services.*' => 'exists:services,id',
            'position' => 'required|string|max:50',
        ];
    }
}
