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
}
