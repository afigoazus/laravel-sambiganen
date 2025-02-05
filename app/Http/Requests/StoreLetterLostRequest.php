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
            'tempat-lahir' => 'required',
            'tanggal-lahir' => 'required',
            'gender' => 'required',
            'status-perkawinan' => 'required',
            'pekerjaan' => 'required',
            'pendidikan' => 'required',
            'nik' => 'required',
            'no-kk' => 'required',
            'alamat' => 'required',
            'barang-hilang' => 'required'
        ];
    }
}
