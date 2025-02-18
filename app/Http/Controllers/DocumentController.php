<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBirthNoteRequest;
use App\Http\Requests\StoreDeathNoteRequest;
use App\Http\Requests\StoreLetterBusinessRequest;
use App\Http\Requests\StoreLetterDeathRequest;
use App\Http\Requests\StoreLetterIncapacityRequest;
use App\Http\Requests\StoreLetterLostRequest;
use App\Http\Services\BirthNoteService;
use App\Http\Services\DeathNoteService;
use App\Http\Services\LetterBusinessService;
use App\Http\Services\LetterDeathService;
use App\Http\Services\LetterIncapacityService;
use App\Http\Services\LetterLostService;
use App\Http\Services\PdfService;
use App\Models\BirthNote;
use App\Models\DeathNote;
use App\Models\LetterBusiness;
use App\Models\LetterDeath;
use App\Models\LetterFuel;
use App\Models\LetterIncapacity;
use App\Models\LetterLost;

class DocumentController extends Controller
{
    public function __construct(
        protected BirthNoteService $birthNoteService,
        protected LetterBusinessService $letterBusinessService,
        protected LetterDeathService $letterDeathService,
        protected DeathNoteService $deathNoteService,
        protected LetterIncapacityService $letterIncapacityService,
        protected LetterLostService $letterLostService,
        protected PdfService $pdfService
    ) {}
    public function index()
    {
        return view('docs');
    }

    // Function for Download Letter
    public function downloadLetterLost($id)
    {
        return $this->pdfService->generate(LetterLost::class, 'pdf.letter-lost', 'Surat_Kehilangan_', $id);
    }

    public function downloadBirthNote($id)
    {
        return $this->pdfService->generate(BirthNote::class, 'pdf.birth-note', 'Capil_Kelahiran_', $id);
    }

    public function downloadDeathNote($id)
    {
        return $this->pdfService->generate(DeathNote::class, 'pdf.death-note', 'Capil_Kematian_', $id);
    }

    public function downloadLetterDeath($id)
    {
        return $this->pdfService->generate(LetterDeath::class, 'pdf.letter-death', 'Surat_Keterangan_Kematian_', $id);
    }

    public function downloadLetterBussiness($id)
    {
        return $this->pdfService->generate(LetterBusiness::class, 'pdf.letter-business', 'Surat_Keterangan_Usaha_', $id);
    }

    public function downloadLetterIncapacity($id)
    {
        return $this->pdfService->generate(LetterIncapacity::class, 'pdf.letter-incapacity', 'Surat_Keterangan_Tidak_Mampu_', $id);
    }

    public function downloadLetterFuel($id)
    {
        return $this->pdfService->generate(LetterFuel::class, 'pdf.letter-fuel', 'Surat_Perizinan_Solar', $id, [0, 0, 612, 1008]);
    }

    // Function for store letter to database

    public function storeLetterBusiness(StoreLetterBusinessRequest $request)
    {
        $this->letterBusinessService->store($request->validated());

        return redirect()->route('surat-surat.keterangan-usaha')->with('success', 'Data berhasil disimpan');
    }

    public function storeBirthNote(StoreBirthNoteRequest $request)
    {
        $this->birthNoteService->store($request->validated());

        return redirect()->route('surat-surat.kelahiran')->with('success', 'Data Berhasil Disimpan');
    }

    public function storeLetterDeath(StoreLetterDeathRequest $request)
    {
        $this->letterDeathService->store($request->validated());

        return redirect()->route('surat-surat.kematian_minimal')->with('success', 'Data berhasil disimpan');
    }

    public function storeDeathNote(StoreDeathNoteRequest $request)
    {
        $this->deathNoteService->store($request->validated());

        return redirect()->route('surat-surat.kematian_nkri')->with('success', 'Data berhasil disimpan');
    }

    public function storeLetterIncapacity(StoreLetterIncapacityRequest $request)
    {
        $this->letterIncapacityService->store($request->validated());

        return redirect()->route('surat-surat.keringanan_sekolah')->with('success', 'Data berhasil disimpan');
    }

    public function storeLetterLost(StoreLetterLostRequest $request)
    {
        $this->letterLostService->store($request->validated());

        return redirect()->route('surat-surat.kehilangan')->with('success', 'Data berhasil disimpan');
    }
}
