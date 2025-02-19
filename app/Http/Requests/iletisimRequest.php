<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class iletisimRequest extends FormRequest
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
            'isim' => 'required',
            'email' => 'required|email',

            'mesaj' => 'required',

        ];
    }
    public function messages(): array
    {
        return [
           'isim.required' => 'isim zorunlu',
            'email.required' => 'email zorunlu',

            'mesaj.required' => 'Lütfen yazacağınız mesajı giriniz',
        ];
    }
}
