<?php

namespace App\Http\Controllers;

use App\Http\Services\CreationService;
use Illuminate\Http\Request;

class CreationController extends Controller
{
    public function __construct(protected CreationService $creationService) {}
    public function index()
    {
        $creations = $this->creationService->getAllCreations();
        return view('creation', compact('creations'));
    }
}
