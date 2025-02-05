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
            'nama-pelapor' => 'required',
            'nik-pelapor' => 'required',
            'no-dok-perjalanan' => 'required',
            'kewarganegaraan-pelapor' => 'required',
            'no-hp' => 'required',
            'nama-saksi-1' => 'required',
            'nik-saksi-1' => 'required',
            'kewarganegaraan-saksi-1' => 'required',
            'nama-saksi-2' => 'required',
            'nik-saksi-2' => 'required',
            'kewarganegaraan-saksi-2' => 'required',
            'nama-ayah' => 'required',
            'nik-ayah' => 'required',
            'tempat-lahir-ayah' => 'required',
            'tanggal-lahir-ayah' => 'required|date',
            'kewarganegaraan-ayah' => 'required',
            'nama-ibu' => 'required',
            'nik-ibu' => 'required',
            'tempat-lahir-ibu' => 'required',
            'tanggal-lahir-ibu' => 'required|date',
            'kewarganegaraan-ibu' => 'required',
            'no-kk-anak' => 'required',
            'hubungan-keluarga' => 'required',
            'nama-anak' => 'required',
            'gender-anak' => 'required',
            'tempat-dilahirkan' => 'required',
            'tempat-kelahiran' => 'required',
            'tanggal-kelahiran' => 'required|date',
            'hari-kelahiran' => 'required',
            'jam-kelahiran' => 'required',
            'jenis-kelahiran' => 'required',
            'kelahiran-ke' => 'required|integer',
            'penolong-kelahiran' => 'required',
            'berat-bayi' => 'required|numeric',
            'panjang-bayi' => 'required|numeric',
            'golongan-darah' => 'required',
            'agama-anak' => 'required',
            'kecacatan' => 'required',
            'kewarganegaraan-anak' => 'required'
        ];
    }
}
