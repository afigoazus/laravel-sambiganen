<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLetterDeathRequest extends FormRequest
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
            'nama-ortu' => 'required|max:100',
            'nik' => 'required|digits:16',
            'tanggal-kematian' => 'required|date',
            'jam-kematian' => 'required|date_format:H:i',
            'sebab-kematian' => 'required|max:100',
            'nama-ibu' => 'required|max:100',
            'nama-ayah' => 'required|max:100',
            'no-wa' => 'required|max:20',
        ];
    }
}
