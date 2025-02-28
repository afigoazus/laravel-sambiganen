<?php

namespace App\Http\Services;

use Barryvdh\DomPDF\Facade\Pdf;

class PdfService
{
    public function generate($modelClass, $view, $filenamePrefix, $id, $paperSize = [0, 0, 612, 1008])
    {
        $dataPdf = $modelClass::findOrFail($id);
        /*return view($view, ["data" => $dataPdf]);*/

        $pdf = Pdf::loadView($view, ['data' => $dataPdf])->setPaper($paperSize);
        return $pdf->download($filenamePrefix . "_" . $dataPdf['name'] . '.pdf');
    }
}
