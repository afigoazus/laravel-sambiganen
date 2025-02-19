<?php

namespace App\Http\Services;

use App\Models\Document;

class DocPdfService
{
    public function getAllPdf()
    {
        return Document::all();
    }
}
