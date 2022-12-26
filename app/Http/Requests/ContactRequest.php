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
            'phone' => 'nullable|numeric|min:10',
            'message' => 'required|string|max:5000'
        ];
    }

    protected function getRedirectUrl(): string
    {
        $url = $this->redirector->getUrlGenerator();

        return $url->previous() . '#contact';
    }
}
