<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBirthNoteRequest;
use App\Http\Requests\StoreDeathNoteRequest;
use App\Http\Requests\StoreDTKSRequest;
use App\Http\Requests\StoreLetterBusinessRequest;
use App\Http\Requests\StoreLetterDeathRequest;
use App\Http\Requests\StoreLetterFuelRequest;
use App\Http\Requests\StoreLetterIncapacityRequest;
use App\Http\Requests\StoreLetterLostRequest;
use App\Http\Requests\StoreLetterPerpindahanRequest;
use App\Http\Requests\StoreLandPriceNoteRequest;
use App\Http\Services\BirthNoteService;
use App\Http\Services\DeathNoteService;
use App\Http\Services\DocPdfService;
use App\Http\Services\DTKSService;
use App\Http\Services\LandPriceNoteService;
use App\Http\Services\LetterBusinessService;
use App\Http\Services\LetterDeathService;
use App\Http\Services\LetterFuelService;
use App\Http\Services\LetterIncapacityService;
use App\Http\Services\LetterLostService;
use App\Http\Services\LetterPerpindahanService;
use App\Http\Services\PdfService;
use App\Models\BirthNote;
use App\Models\DeathNote;
use App\Models\Dtks;
use App\Models\LandPriceNote;
use App\Models\LandSaleAgreementNote;
use App\Models\LetterBusiness;
use App\Models\LetterDeath;
use App\Models\LetterFuel;
use App\Models\LetterIncapacity;
use App\Models\LetterLost;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function __construct(
        protected BirthNoteService $birthNoteService,
        protected LetterBusinessService $letterBusinessService,
        protected LetterDeathService $letterDeathService,
        protected DeathNoteService $deathNoteService,
        protected LandPriceNoteService $landPriceNoteService,
        protected LetterIncapacityService $letterIncapacityService,
        protected LetterLostService $letterLostService,
        protected LetterFuelService $letterFuelService,
        protected LetterPerpindahanService $letterPerpindahanService,
        protected DTKSService $dtksService,
        protected PdfService $pdfService,
        protected DocPdfService $docPdfService
    ) {}
    public function index()
    {
        $allDocs = $this->docPdfService->getAllPdf();
        return view('docs', compact('allDocs'));
    }

    // Function for Download Letter
    public function downloadLetterLost($id)
    {
        return $this->pdfService->generate(LetterLost::class, 'pdf.letter-lost', 'Surat_Kehilangan_', $id);
    }

    public function downloadSKPWNI($id)
    {
        return $this->pdfService->generateFilledPdf($id);
    }

    public function downloadBirthNote($id)
    {
        return $this->pdfService->generate(BirthNote::class, 'pdf.combined-birth-document', 'Capil_Kelahiran_', $id);
    }

    public function downloadDeathNote($id)
    {
        return $this->pdfService->generate(DeathNote::class, 'pdf.combined-death-document', 'Capil_Kematian_', $id);
    }

    public function downloadLandSaleAgreement($id)
    {
        return $this->pdfService->generate(LandSaleAgreementNote::class, 'pdf.land-sale-agreement-note', 'Surat_Perjanjian_Jual_Beli_Tanah_', $id);
    }

    public function downloadLetterDeath($id)
    {
        return $this->pdfService->generate(LetterDeath::class, 'pdf.letter-death', 'Surat_Keterangan_Kematian_', $id);
    }

    public function downloadLetterBussiness($id)
    {
        return $this->pdfService->generate(LetterBusiness::class, 'pdf.letter-business', 'Surat_Keterangan_Taksiran_Harga_Tanah_', $id);
    }

    public function downloadLandPriceNote($id)
    {
        return $this->pdfService->generate(LandPriceNote::class, 'pdf.land-price-note', 'Surat_Keterangan_Taksiran_Harga_Tanah_', $id, [0, 0, 612, 1008]);
    }

    public function downloadLetterIncapacity($id)
    {
        return $this->pdfService->generate(LetterIncapacity::class, 'pdf.letter-incapacity', 'Surat_Keterangan_Tidak_Mampu_', $id);
    }

    public function downloadLetterFuel($id)
    {
        return $this->pdfService->generate(LetterFuel::class, 'pdf.letter-fuel', 'Surat_Perizinan_Solar', $id, [0, 0, 612, 1008]);
    }

    public function downloadDTKS($id)
    {
        return $this->pdfService->generate(Dtks::class, 'pdf.dtks', 'Data Terpadu Kesejahteraan Sosial', $id, [0, 0, 612, 1008]);
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

    public function storeLandPriceNote(StoreLandPriceNoteRequest $request) 
    {
        $this->landPriceNoteService->store($request->validated());

        return redirect()->route('surat-surat.taksiran-harga-tanah')->with('success', 'Data Berhasil Disimpan');
    }

    public function storeLetterDeath(StoreLetterDeathRequest $request)
    {
        $this->letterDeathService->store($request->validated());

        return redirect()->route('surat-surat.kematian-minimal')->with('success', 'Data berhasil disimpan');
    }

    public function storeDeathNote(StoreDeathNoteRequest $request)
    {
        $this->deathNoteService->store($request->validated());

        return redirect()->route('surat-surat.kematian-nkri')->with('success', 'Data berhasil disimpan');
    }

    public function storeLetterIncapacity(StoreLetterIncapacityRequest $request)
    {
        $this->letterIncapacityService->store($request->validated());

        return redirect()->route('surat-surat.keringanan-sekolah')->with('success', 'Data berhasil disimpan');
    }

    public function storeLetterLost(StoreLetterLostRequest $request)
    {
        $this->letterLostService->store($request->validated());

        return redirect()->route('surat-surat.kehilangan')->with('success', 'Data berhasil disimpan');
    }

    public function storeLetterFuel(StoreLetterFuelRequest $request)
    {
        $this->letterFuelService->store($request->validated());

        return redirect()->route('surat-surat.bbm')->with('success', 'Data berhasil disimpan');
    }

    public function storeLetterPerpindahan(StoreLetterPerpindahanRequest $request)
    {
        $this->letterPerpindahanService->store($request->validated());

        return redirect()->route('surat-surat.perpindahan-penduduk')->with('success', 'Data berhasil disimpan');
    }

    public function storeDTKS(StoreDTKSRequest $request)
    {
        $this->dtksService->store($request);

        return redirect()->route('surat-surat.dtks')->with('success', 'Data berhasil disimpan');
    }
}
