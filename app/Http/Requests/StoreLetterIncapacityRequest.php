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
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'parent-name' => 'required',
            'tempat-lahir-ortu' => 'required',
            'tanggal-lahir-ortu' => 'required',
            'gender-ortu' => 'required',
            'kewarganegaraan' => 'required',
            'parent-education' => 'required',
            'job' => 'required',
            'perkawinan' => 'required',
            'no-ktp' => 'required',
            'agama' => 'required',
            'alamat-ortu' => 'required',
            'child-name' => 'required',
            'tempat-lahir-anak' => 'required',
            'tanggal-lahir-anak' => 'required',
            'gender-anak' => 'required',
            'child-education' => 'required',
            'alamat-anak' => 'required',
        ];
    }
}
