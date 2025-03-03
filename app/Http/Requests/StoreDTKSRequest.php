<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDTKSRequest extends FormRequest
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
            'rt/rw' => 'required|max:100',
            'image-ktp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image-kk' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image-rumah' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image-lantai' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
