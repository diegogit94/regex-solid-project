<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return false;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'regex:/^([A-Za-z]([ ]?[A-Za-z]){1,50})$/'],
            'surnames' => ['required', 'regex:/^([A-Za-z]([ ]?[A-Za-z]){1,50})$/'],
            'document_type' => ['required', 'regex:/^([A-Z]{1,5})$/'],
            'identification' => ['required', 'regex:/^([0-9](-?)){1,25}$/'],
            'email' => ['required', 'regex:/^[\w-\.]{1,40}@([A-Za-z]{1,10}\.)[A-Za-z]{2,3}$/'],
            'password' => ['required', 'regex:/^.[^ ]{5,50}$/'],
        ];
    }
}
