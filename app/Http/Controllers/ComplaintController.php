<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index()
    {
        return view('complaint');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'content' => 'required|string',
        ]);

        Complaint::create([
            'name' => $validated['name'],
            'content' => $validated['content'],
        ]);

        return redirect()->route('pengaduan')->with('success', 'Data berhasil disimpan');
    }
}
