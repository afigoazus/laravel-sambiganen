<?php

namespace App\Http\Services;

use Barryvdh\DomPDF\Facade\Pdf;

class PdfService
{
    public function generate($modelClass, $view, $filenamePrefix, $id, $paperSize = 'A4')
    {
        $dataPdf = $modelClass::findOrFail($id);
        $pdf = Pdf::loadView($view, ['data' => $dataPdf])->setPaper($paperSize);

        return $pdf->download($filenamePrefix . "_" . $dataPdf['name'] . '.pdf');
    }
}
