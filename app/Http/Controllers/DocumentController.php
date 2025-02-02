<?php

namespace App\Http\Controllers;

use App\Models\BirthNote;
use App\Models\DeathNote;
use App\Models\LetterBusiness;
use App\Models\LetterDeath;
use App\Models\LetterFuel;
use App\Models\LetterIncapacity;
use App\Models\LetterLost;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function index()
    {
        return view('docs');
    }

    public function downloadLetterLost($id = 1)
    {
        $dataPdf = LetterLost::findOrFail($id);

        if (!$dataPdf) {
            return view('<h1>Not Found</h1>');
        }

        $pdf = Pdf::loadView('pdf.letter-lost', ['data' => $dataPdf]);
        return $pdf->download('Surat_Keterangan_Kehilangan_' . $dataPdf['name'] . '.pdf');
    }

    public function downloadBirthNote($id)
    {
        $dataPdf = BirthNote::findOrFail($id);
        $pdf = Pdf::loadView('pdf.birth-note', ['data' => $dataPdf]);
        return $pdf->download('Capil_Kelahiran_' . $dataPdf['name'] . '.pdf');
    }

    public function downloadDeathNote($id)
    {
        $dataPdf = DeathNote::findOrFail($id);
        $pdf = Pdf::loadView('pdf.death-note', ['data' => $dataPdf]);
        return $pdf->download('Capil_Kematian_' . $dataPdf['name'] . '.pdf');
    }

    public function downloadLetterDeath($id)
    {
        $dataPdf = LetterDeath::findOrFail($id);

        if (!$dataPdf) {
            return view('<h1>Not Found</h1>');
        }

        $pdf = Pdf::loadView('pdf.letter-death', ['data' => $dataPdf]);
        return $pdf->download('Surat_Keterangan_Kematian_' . $dataPdf['name'] . '.pdf');
    }

    public function downloadLetterBussiness($id)
    {
        $dataPdf = LetterBusiness::findOrFail($id);

        if (!$dataPdf) {
            return view('<h1>Not Found</h1>');
        }

        $pdf = Pdf::loadView('pdf.letter-business', ['data' => $dataPdf]);
        return $pdf->download('Surat_Keterangan_Usaha_' . $dataPdf['name'] . '.pdf');
    }

    public function downloadLetterIncapacity($id = 1)
    {
        $dataPdf = LetterIncapacity::findOrFail($id);

        if (!$dataPdf) {
            return view('<h1>Not Found</h1>');
        }

        $pdf = Pdf::loadView('pdf.letter-incapacity', ['data' => $dataPdf]);
        return $pdf->download('Surat_Keterangan_Tidak_Mampu_' . $dataPdf['name'] . '.pdf');
    }

    public function downloadLetterFuel($id)
    {
        $dataPdf = LetterFuel::findOrFail($id);

        if (!$dataPdf) {
            return view('<h1>Not Found</h1>');
        }

        $pdf = Pdf::loadView('pdf.letter-fuel', ['data' => $dataPdf])->setPaper([0, 0, 612, 1008], 'portrait');
        return $pdf->download('Surat_Perizinan_Solar_' . $dataPdf['name'] . '.pdf');
    }

    public function storeLetterBusiness(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'alamat' => 'required',
            'nik' => 'required',
            'kategori' => 'required',
            'nama-usaha' => 'required',
        ]);

        $letterBusiness = LetterBusiness::create([
            'name' => $request['name'],
            'address' => $request['alamat'],
            'no_ktp' => $request['nik'],
            'agriculture' => $request['kategori'] == 'Pertanian' ? $request['nama-usaha'] : null,
            'industry' => $request['kategori'] == 'Perindustrian' ? $request['nama-usaha'] : null,
            'trading' => $request['kategori'] == 'Perdagangan' ? $request['nama-usaha'] : null,
            'stock_breeding' => $request['kategori'] == 'Peternakan' ? $request['nama-usaha'] : null,
            'handicraft' => $request['kategori'] == 'Kerajinan' ? $request['nama-usaha'] : null,
            'service' => $request['kategori'] == 'Jasa' ? $request['nama-usaha'] : null,
            'other' => $request['kategori'] == 'Lainnya' ? $request['nama-usaha'] : null,
        ]);

        dd($letterBusiness);

        return redirect()->route('docs')->with('success', 'Data berhasil disimpan');

    }

    public function storeBirthNote(Request $request)
    {
        $request->validate([
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
            'tanggal-lahir-ayah' => 'required',
            'kewarganegaraan-ayah' => 'required',
            'nama-ibu' => 'required',
            'nik-ibu' => 'required',
            'tempat-lahir-ibu' => 'required',
            'tanggal-lahir-ibu' => 'required',
            'kewarganegaraan-ibu' => 'required',
            'no-kk-anak' => 'required',
            'hubungan-keluarga' => 'required',
            'nama-anak' => 'required',
            'gender-anak' => 'required',
            'tempat-dilahirkan' => 'required',
            'tempat-kelahiran' => 'required',
            'tanggal-kelahiran' => 'required',
            'hari-kelahiran' => 'required',
            'jam-kelahiran' => 'required',
            'jenis-kelahiran' => 'required',
            'kelahiran-ke' => 'required',
            'penolong-kelahiran' => 'required',
            'berat-bayi' => 'required',
            'panjang-bayi' => 'required',
            'golongan-darah' => 'required',
            'agama-anak' => 'required',
            'kecacatan' => 'required',
            'kewarganegaraan-anak' => 'required'
        ]);

        $birthNote = BirthNote::create([
            'name' => $request['nama-pelapor'],
            'nik' => $request['nik-pelapor'],
            'no_dok_journey' => $request['no-dok-perjalanan'],
            'nationality' => $request['kewarganegaraan-pelapor'],
            'no_wa' => $request['no-hp'],
            'name_saksi' => $request['nama-saksi-1'],
            'nik_saksi' => $request['nik-saksi-1'],
            'nationality_saksi' => $request['kewarganegaraan-saksi-1'],
            'name_saksi2' => $request['nama-saksi-2'],
            'nik_saksi2' => $request['nik-saksi-2'],
            'nationality_saksi2' => $request['kewarganegaraan-saksi-2'],
            'name_dad' => $request['nama-ayah'],
            'nik_dad' => $request['nik-ayah'],
            'place_born_dad' => $request['tempat-lahir-ayah'],
            'date_born_dad' => $request['tanggal-lahir-ayah'],
            'nationality_dad' => $request['kewarganegaraan-ayah'],
            'name_mom' => $request['nama-ibu'],
            'nik_mom' => $request['nik-ibu'],
            'place_born_mom' => $request['tempat-lahir-ibu'],
            'date_born_mom' => $request['tanggal-lahir-ibu'],
            'nationality_mom' => $request['kewarganegaraan-ibu'],
            'no_kk_anak' => $request['no-kk-anak'],
            'hub_keluarga' => $request['hubungan-keluarga'],
            'name_child' => $request['nama-anak'],
            'gender_child' => $request['gender-anak'],
            'place_birth_child' => $request['tempat-dilahirkan'],
            'place_birth_child2' => $request['tempat-kelahiran'],
            'date_birth_child' => $request['tanggal-kelahiran'],
            'day_birth_child' => $request['hari-kelahiran'],
            'hour_birth_child' => $request['jam-kelahiran'],
            'type_birth_child' => $request['jenis-kelahiran'],
            'no_birth_child' => $request['kelahiran-ke'],
            'helper_birth' => $request['penolong-kelahiran'],
            'weight_child' => $request['berat-bayi'],
            'height_child' => $request['panjang-bayi'],
            'blood_type_child' => $request['golongan-darah'],
            'religion_child' => $request['agama-anak'],
            'disability' => $request['kecacatan'],
            'nationality_child' => $request['kewarganegaraan-anak']
        ]);

        dd($birthNote);

        return redirect()->route('surat-surat.kelahiran')->with('success', 'Data berhasil disimpan');
    }

    public function storeLetterDeath(Request $request)
    {
        $request->validate([
            'parent-name' => 'required',
            'nik' => 'required',
            'tanggal-kematian' => 'required',
            'jam-kematian' => 'required',
            'sebab-kematian' => 'required',
            'nama-ibu' => 'required',
            'nama-ayah' => 'required',
        ]);

        $letterDeath = LetterDeath::create([
            'name' => $request['parent-name'],
            'nik' => $request['nik'],
            'date_death' => $request['tanggal-kematian'],
            'hour_death' => $request['jam-kematian'],
            'cause_death' => $request['sebab-kematian'],
            'mom_name' => $request['nama-ibu'],
            'dad_name' => $request['nama-ayah'],
        ]);

        dd($letterDeath);

        return redirect()->route('surat-surat.kematian_minimal')->with('success', 'Data berhasil disimpan');
    }

    public function storeDeathNote(Request $request) {
        $request->validate([
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
        ]);

        $deathNote = DeathNote::create([
            'name' => $request['nama-pelapor'],
            'nik' => $request['nik'],
            'no_dok_journey' => $request['no-dok-perjalanan'],
            'nationality' => $request['kewarganegaraan'],
            'no_wa' => $request['no-hp'],
            'name_saksi' => $request['nama-saksi-1'],
            'nik_saksi' => $request['nik-saksi-1'],
            'nationality_saksi' => $request['kewarganegaraan-saksi-1'],
            'name_saksi2' => $request['nama-saksi-2'],
            'nik_saksi2' => $request['nik-saksi-2'],
            'nationality_saksi2' => $request['kewarganegaraan-saksi-2'],
            'name_dad' => $request['nama-ayah'],
            'nik_dad' => $request['nik-ayah'],
            'place_born_dad' => $request['tempat-lahir-ayah'],
            'date_born_dad' => $request['tanggal-lahir-ayah'],
            'nationality_dad' => $request['kewarganegaraan-ayah'],
            'name_mom' => $request['nama-ibu'],
            'nik_mom' => $request['nik-ibu'],
            'place_born_mom' => $request['tempat-lahir-ibu'],
            'date_born_mom' => $request['tanggal-lahir-ibu'],
            'nationality_mom' => $request['kewarganegaraan-ibu'],
            'nik_death' => $request['nik-kematian'],
            'name_death' => $request['nama-kematian'],
            'date_death' => $request['tanggal-kematian'],
            'hour_death' => $request['jam-kematian'],
            'caused_death' => $request['sebab-kematian'],
            'place_death' => $request['tempat-kematian'],
            'info_death' => $request['yang-menerangkan'],
        ]);

        dd($deathNote);

        return redirect()->route('surat-surat.kematian_nkri')->with('success', 'Data berhasil disimpan');
    }

    public function storeLetterIncapacity(Request $request)
    {
        $request->validate([
            'parent-name' => 'required',
            'tempat-lahir-ortu' => 'required',
            'tanggal-lahir-ortu' => 'required',
            'gender-ortu' => 'required',
            'kewarganegaraan' => 'required',
            'parent-education' => 'required',
            'job' => 'required',
            'perkawinan' => 'required',
            'no-ktp' => 'required',
            'agama' => 'required',
            'alamat-ortu' => 'required',
            'child-name' => 'required',
            'tempat-lahir-anak' => 'required',
            'tanggal-lahir-anak' => 'required',
            'gender-anak' => 'required',
            'child-education' => 'required',
            'alamat-anak' => 'required',
        ]);

        $letterIncapacity = LetterIncapacity::create([
            'name' => $request['parent-name'],
            'tgl_lahir' => $request['tanggal-lahir-ortu'],
            'tempat_lahir' => $request['tempat-lahir-ortu'],
            'gender' => $request['gender-ortu'],
            'nationality' => $request['kewarganegaraan'],
            'education' => $request['parent-education'],
            'job' => $request['job'],
            'marriage' => $request['perkawinan'],
            'nik' => $request['no-ktp'],
            'religion' => $request['agama'],
            'address' => $request['alamat-ortu'],
            'name_child' => $request['child-name'],
            'tgl_lahir_child' => $request['tanggal-lahir-anak'],
            'tempat_lahir_child' => $request['tempat-lahir-anak'],
            'gender_child' => $request['gender-anak'],
            'education_child' => $request['child-education'],
            'address_child' => $request['alamat-anak'],
        ]);

        dd($letterIncapacity);

        return redirect()->route('surat-surat.keringanan_sekolah')->with('success', 'Data berhasil disimpan');
    }

    public function storeLetterLost(Request $request) 
    {
        $request->validate([
            'name' => 'required',
            'tempat-lahir' => 'required',
            'tanggal-lahir' => 'required',
            'gender' => 'required',
            'status-perkawinan' => 'required',
            'pekerjaan' => 'required',
            'pendidikan' => 'required',
            'nik' => 'required',
            'no-kk' => 'required',
            'alamat' => 'required',
            'barang-hilang' => 'required'
        ]);

        $letterLost = LetterLost::create([
            'name' => $request['name'],
            'tempat_lahir' => $request['tempat-lahir'],
            'tgl_lahir' => $request['tanggal-lahir'],
            'gender' => $request['gender'],
            'nationality' => 'WNI',
            'religion' => 'Islam',
            'marriage' => $request['status-perkawinan'],
            'job' => $request['pekerjaan'],
            'education' => $request['pendidikan'],
            'nik' => $request['nik'],
            'no_kk' => $request['no-kk'],
            'address' => $request['alamat'],
            'information' => $request['barang-hilang'],
        ]);

        dd($letterLost);

        return redirect()->route('surat-surat.kehilangan')->with('success', 'Data berhasil disimpan');
    }
}
