<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLetterBusinessRequest extends FormRequest
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
            'name' => 'required',
            'alamat' => 'required',
            'nik' => 'required',
            'pertanian' => 'nullable',
            'perindustrian' => 'nullable',
            'perdagangan' => 'nullable',
            'perternakan' => 'nullable',
            'kerajinan' => 'nullable',
            'jasa' => 'nullable',
            'lainnya' => 'nullable',
            'nama-usaha' => 'required',
        ];
    }
}
