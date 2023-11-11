<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            "email" => "required",
            "password" => "required"
        ];
    }
    public function messages()
    {
      return [
        "email.required" => "Le champ email est requit",
        "email.email" => "Le champ email est requit",
        "password.required" => "Le champ password est requit",
      ];
    }
}
