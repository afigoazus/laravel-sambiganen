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
            'parent-name' => 'required',
            'nik' => 'required',
            'tanggal-kematian' => 'required',
            'jam-kematian' => 'required',
            'sebab-kematian' => 'required',
            'nama-ibu' => 'required',
            'nama-ayah' => 'required',
        ];
    }
}
