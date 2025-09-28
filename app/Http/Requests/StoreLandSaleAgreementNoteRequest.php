<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLandSaleAgreementNoteRequest extends FormRequest
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
            'nama-pihak-pertama' => 'required|string|max:100',
            'tempat-lahir-pihak-pertama' => 'required|string|max:100',
            'tanggal-lahir-pihak-pertama' => 'required|date',
            'nik-pihak-pertama' => 'required|string|max:16',
            'alamat-pihak-pertama' => 'required|string',
            'nama-pihak-kedua' => 'required|string|max:100',
            'tempat-lahir-pihak-kedua' => 'required|string|max:100',
            'tanggal-lahir-pihak-kedua' => 'required|date',
            'nik-pihak-kedua' => 'required|string|max:16',
            'alamat-pihak-kedua' => 'required|string',
            'luas-tanah' => 'required|numeric',
            'no-persil' => 'required|string|max:100',
            'no-sppt' => 'required|string|max:100',
            'no-sertifikat' => 'required|string|max:100',
            'harga-tanah' => 'required|numeric',
            'batas-utara' => 'required|string|max:100',
            'batas-timur' => 'required|string|max:100',
            'batas-barat' => 'required|string|max:100',
            'batas-selatan' => 'required|string|max:100',
            'nama-saksi-1' => 'required|string|max:100',
            'jabatan-saksi-1' => 'required|string|max:100',
            'nama-saksi-2' => 'required|string|max:100',
            'jabatan-saksi-2' => 'required|string|max:100',
            'nama-saksi-3' => 'required|string|max:100',
            'jabatan-saksi-3' => 'required|string|max:100',
        ];
    }
}
