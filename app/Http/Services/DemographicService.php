<?php

namespace App\Http\Services;

use App\Models\Demographic;

class DemographicService
{
    public function getDemographic()
    {
        $demographic = Demographic::first();
        return $demographic;
    }
}
