<?php

namespace App\Http\Controllers;

use App\Http\Services\GaleryService;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function __construct(protected GaleryService $galeryService) {}
    public function index()
    {
        $images = $this->galeryService->getGaleries();
        return view('galery', compact("images"));
    }
}
