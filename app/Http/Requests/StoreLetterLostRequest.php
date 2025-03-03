<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLetterLostRequest extends FormRequest
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
            'name' => 'required|string|max:100',
            'tempat-lahir' => 'required|string|max:100',
            'tanggal-lahir' => 'required|date',
            'gender' => 'required|max:10',
            'status-perkawinan' => 'required|string|max:50',
            'pekerjaan' => 'required|string|max:100',
            'pendidikan' => 'required|string|max:100',
            'nik' => 'required|digits:16',
            'no-kk' => 'required|digits:16',
            'alamat' => 'required|string|max:255',
            'barang-hilang' => 'required|string|max:255',
            'no-wa' => 'required|string|max:20'
        ];
    }
}
