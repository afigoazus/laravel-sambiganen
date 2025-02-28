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
            'name' => 'required',
            'nik' => 'required',
            'alamat' => 'required',
            'nama-usaha' => 'nullable',
            'sektor-pengguna' => 'required',
            'jenis-usaha' => 'required',
            'no-wa' => 'required',
            'jenis-alat' => 'required',
            'jumlah-alat' => 'required',
            'fungsi-alat' => 'required',
            'daya-alat' => 'required',
            'lama-penggunaan' => 'required',
            'lama-operasional' => 'required',
            'konsumsi' => 'required',
            'alokasi-volume' => 'required',
            'tempat-pengambilan' => 'required',
            'alat-tukar' => 'required',
        ];
    }
}
