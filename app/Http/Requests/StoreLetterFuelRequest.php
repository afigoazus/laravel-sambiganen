<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLetterFuelRequest extends FormRequest
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
            'name' => 'required|max:100',
            'nik' => 'required|digits:16',
            'alamat' => 'required|max:255',
            'nama-usaha' => 'nullable',
            'sektor-pengguna' => 'required|max:100',
            'jenis-usaha' => 'required|max:100',
            'no-wa' => 'required|max:20',
            'jumlah-alat' => 'required|numeric',
            'jumlah-alat2' => 'required|numeric',
            'daya-alat' => 'required|numeric',
            'lama-penggunaan' => 'required|numeric',
            'lama-operasional' => 'required|numeric',
            'konsumsi' => 'required|numeric',
            'alokasi-volume' => 'required|numeric',
            'tempat-pengambilan' => 'required|max:100',
            'alat-beli' => 'required|max:100',
        ];
    }
}
