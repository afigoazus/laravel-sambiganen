<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLetterPerpindahanRequest extends FormRequest
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
        $rules =  [
            'no_kk' => 'required|string|digits:16',
            'nama_lengkap' => 'required|string|max:100',
            'nik' => 'required|string|digits:16',
            'no_wa' => 'nullable|string|max:15',
            'alamat_asal' => 'required|string',
            'rt_asal' => 'required|string|max:5',
            'rw_asal' => 'required|string|max:5',
            'kode_pos_asal' => 'required|string|max:10',
            'klasifikasi_kepindahan' => 'required|integer|min:1|max:4',
            'alamat_pindah' => 'required|string',
            'rt_pindah' => 'required|string|max:5',
            'rw_pindah' => 'required|string|max:5',
            'desa' => 'required|string|max:100',
            'kecamatan' => 'required|string|max:100',
            'kabupaten' => 'required|string|max:100',
            'provinsi' => 'required|string|max:100',
            'kode_pos_pindah' => 'required|string|max:10',
            'no_telp' => 'nullable|string|max:15',
            'alasan_pindah' => 'required|integer|min:1|max:7',
            'jenis_kepindahan' => 'required|integer|min:1|max:4',
            'anggota_tidak_pindah' => 'required|integer|min:1|max:3',
            'anggota_pindah' => 'required|integer|min:1|max:2',
            'nik_fam1' => 'required',
            'nama_fam1' => 'required',
            'status_fam1' => 'required',
        ];

        // Determine how many family members are submitted
        $countMembers = 0;
        for ($i = 1; $i <= 5; $i++) {
            if ($this->has('nik_fam' . $i) && !empty($this->input('nik_fam' . $i))) {
                $countMembers++;
                $rules['nik_fam' . $i] = 'string|digits:16';
                $rules['nama_fam' . $i] = 'string|max:100';
                $rules['status_fam' . $i] = 'string|max:50';
            }
        }

        return $rules;
    }
}
