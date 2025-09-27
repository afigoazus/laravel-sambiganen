<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBirthNoteRequest extends FormRequest
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
            'nama-pelapor' => 'required|string|max:100',
            'nik-pelapor' => 'required|digits:16',
            'kewarganegaraan-pelapor' => 'required|string|max:50',
            'no-hp' => 'required|string|max:15',
            'nama-saksi-1' => 'required|string|max:100',
            'nik-saksi-1' => 'required|digits:16',
            'kewarganegaraan-saksi-1' => 'required|string|max:50',
            'nama-saksi-2' => 'required|string|max:100',
            'nik-saksi-2' => 'required|digits:16',
            'kewarganegaraan-saksi-2' => 'required|string|max:50',
            'nama-ayah' => 'required|string|max:100',
            'nik-ayah' => 'required|digits:16',
            'tempat-lahir-ayah' => 'required|string|max:100',
            'tanggal-lahir-ayah' => 'required|date',
            'pekerjaan-ayah' => 'required|string|max:100', // adding pekerjaan ayah
            'alamat-ayah' => 'required|string', // adding alamat ayah
            'kewarganegaraan-ayah' => 'required|string|max:50',
            'nama-ibu' => 'required|string|max:100',
            'nik-ibu' => 'required|digits:16',
            'tempat-lahir-ibu' => 'required|string|max:100',
            'tanggal-lahir-ibu' => 'required|date',
            'pekerjaan-ibu' => 'required|string|max:100', // adding pekerjaan ibu
            'alamat-ibu' => 'required|string', // adding alamat ibu
            'kewarganegaraan-ibu' => 'required|string|max:50',
            'no-kk-anak' => 'required|digits:16',
            'hubungan-keluarga' => 'required|string|max:50',
            'nama-anak' => 'required|string|max:100',
            'gender-anak' => 'required',
            'tempat-dilahirkan' => 'required|string|max:100',
            'tempat-kelahiran' => 'required|string|max:100',
            'tanggal-kelahiran' => 'required|date',
            'jam-kelahiran' => 'required|date_format:H:i',
            'jenis-kelahiran' => 'required|string|max:50',
            'kelahiran-ke' => 'required|integer|min:1',
            'penolong-kelahiran' => 'required|string|max:100',
            'berat-bayi' => 'required|numeric|min:0',
            'panjang-bayi' => 'required|numeric|min:0',
            'golongan-darah' => 'required|string|in:A,B,AB,O',
            'agama-anak' => 'required|string|max:50',
            'kecacatan' => 'required|string|max:100',
            'kewarganegaraan-anak' => 'required|string|max:50',
            'alamat-anak' => 'required|string' // adding alamat anak
        ];
    }
}
