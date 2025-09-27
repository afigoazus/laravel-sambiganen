<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLandPriceNoteRequest extends FormRequest
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
            'nama' => 'required|string|max:100',
            'tempat-lahir' => 'required|string|max:100',
            'tanggal-lahir' => 'required|date',
            'pekerjaan' => 'required|string|max:100',
            'alamat' => 'required|string',
            'no-sertifikat' => 'required|string|max:100',
            'luas-tanah' => 'required|numeric',
            'harga' => 'required|numeric',
            'batas-utara' => 'required|string|max:100',
            'batas-timur' => 'required|string|max:100',
            'batas-barat' => 'required|string|max:100',
            'batas-selatan' => 'required|string|max:100',
        ];
    }
}
