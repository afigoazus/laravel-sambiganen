<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLetterIncapacityRequest extends FormRequest
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
            'nama-ortu' => 'required|max:100',
            'tempat-lahir-ortu' => 'required|max:100',
            'tanggal-lahir-ortu' => 'required|date',
            'gender-ortu' => 'required|max:20',
            'kewarganegaraan' => 'required|max:100',
            'parent-education' => 'required|max:20',
            'job' => 'required|max:20',
            'status-perkawinan' => 'required|max:20',
            'no-ktp' => 'required|digits:16',
            'agama' => 'required|max:100',
            'alamat-ortu' => 'required|max:255',
            'child-name' => 'required|max:100',
            'tempat-lahir-anak' => 'required|max:100',
            'tanggal-lahir-anak' => 'required|date',
            'gender-anak' => 'required|max:20',
            'child-education' => 'required|max:20',
            'alamat-anak' => 'required|max:255',
            'no-wa' => 'required|max:20',
        ];
    }
}
