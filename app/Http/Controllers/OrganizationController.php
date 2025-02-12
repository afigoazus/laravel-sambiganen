<?php

namespace App\Http\Controllers;

use App\Http\Services\OrganizationService;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function __construct(
        protected OrganizationService $organizationService,
    ) {}
    public function index()
    {
        $organizations = $this->organizationService->getAllOrganizations();
        return view('organization', compact('organizations'));
    }
}
