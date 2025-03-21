<?php

namespace App\Http\Requests;

use App\Rules\EmailRule;
use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fullname' => ['required'],
            'nickname' => ['required'],
            'email' => ['required', new EmailRule],
            'phone' => ['required', 'min:10', 'max:16', 'starts_with:+62'],
            'entry_scheme_id' => ['required', 'exists:entry_schemes,id'],
            'image' => ['required', 'mimes:jpg,png'],
            'study_program_1_id' => ['required', 'exists:study_programs,id'],
            'study_program_2_id' => ['required', 'exists:study_programs,id', 'different:study_program_1_id']
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => 'Nama lengkap wajib diisi.',
            'nickname.required' => 'Nama panggilan wajib diisi.',
            'email.required' => 'Email wajib diisi.',
            'phone.required' => 'Nomor telepon wajib diisi.',
            'phone.min' => 'Nomor telepon harus memiliki minimal 10 karakter.',
            'phone.max' => 'Nomor telepon tidak boleh lebih dari 16 karakter.',
            'phone.starts_with' => 'Nomor telepon harus diawali dengan "+62".',
            'entry_scheme_id.required' => 'Jalur masuk wajib dipilih.',
            'entry_scheme_id.exists' => 'Jalur masuk yang dipilih tidak valid.',
            'image.required' => 'Gambar wajib diunggah.',
            'image.mimes' => 'Gambar harus berformat jpg atau png.',
            'study_program_1_id.required' => 'Program studi pertama wajib dipilih.',
            'study_program_1_id.exists' => 'Program studi pertama tidak valid.',
            'study_program_2_id.required' => 'Program studi kedua wajib dipilih.',
            'study_program_2_id.exists' => 'Program studi kedua tidak valid.',
            'study_program_2_id.different' => 'Program studi kedua harus berbeda dari program studi pertama.',
        ];
    }
}
