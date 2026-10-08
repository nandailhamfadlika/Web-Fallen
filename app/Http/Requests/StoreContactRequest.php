<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class StoreContactRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'inquiry_type' => ['required', 'string', 'in:playtest,publisher,press,general'],
            'message' => ['required', 'string', 'max:2000'],
            'hp_verification' => ['nullable', 'max:0'], // Honeypot field for bot protection
        ];
    }

    /**
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'inquiry_type.required' => 'Pilih jenis keperluan.',
            'message.required' => 'Pesan wajib diisi.',
            'hp_verification.max' => 'Spam terdeteksi.',
        ];
    }
}
