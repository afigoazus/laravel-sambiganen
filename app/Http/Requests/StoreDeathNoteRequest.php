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
            'nama-pelapor' => 'required|max:100|string',
            'nik' => 'required|digits:16',
            'kewarganegaraan' => 'required|string|max:50',
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
            'kewarganegaraan-ayah' => 'required|string|max:50',
            'nama-ibu' => 'required|string|max:100',
            'nik-ibu' => 'required|digits:16',
            'tempat-lahir-ibu' => 'required|string|max:100',
            'tanggal-lahir-ibu' => 'required|date',
            'kewarganegaraan-ibu' => 'required|string|max:50',
            'nik-kematian' => 'required|digits:16',
            'nama-kematian' => 'required|string|max:100',
            'tanggal-kematian' => 'required|date',
            'jam-kematian' => 'required|date_format:H:i',
            'sebab-kematian' => 'required|string|max:100',
            'tempat-kematian' => 'required|string|max:100',
            'yang-menerangkan' => 'required|string|max:100',
        ];
    }
}
