<?php

namespace App\Http\Services;

use App\Models\Organization;

class OrganizationService
{
    public function getAllOrganizations()
    {
        $organizations = Organization::all();
        return $organizations;
    }
}
