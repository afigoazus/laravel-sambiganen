<?php

namespace App\Http\Services;

use App\Models\Galery;

class GaleryService
{
    public function getGaleries()
    {
        $galeries = Galery::all();
        return $galeries;
    }
}
