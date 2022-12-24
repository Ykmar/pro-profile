<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'firstname' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|regex:/(01)[0-9]{9}/',
            'message' => 'required|string|max:5000'
        ];
    }
}
