<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDeathNoteRequest extends FormRequest
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
            'nik' => 'required',
            'no-dok-perjalanan' => 'required',
            'kewarganegaraan' => 'required',
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
            'tanggal-lahir-ayah' => 'required',
            'kewarganegaraan-ayah' => 'required',
            'nama-ibu' => 'required',
            'nik-ibu' => 'required',
            'tempat-lahir-ibu' => 'required',
            'tanggal-lahir-ibu' => 'required',
            'kewarganegaraan-ibu' => 'required',
            'nik-kematian' => 'required',
            'nama-kematian' => 'required',
            'tanggal-kematian' => 'required',
            'jam-kematian' => 'required',
            'sebab-kematian' => 'required',
            'tempat-kematian' => 'required',
            'yang-menerangkan' => 'required',
        ];
    }
}
