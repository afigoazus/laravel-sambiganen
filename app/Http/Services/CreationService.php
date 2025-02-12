<?php

namespace App\Http\Services;

use App\Models\Creation;

class CreationService
{
    public function getAllCreations()
    {
        $creations = Creation::all();
        return $creations;
    }
}
