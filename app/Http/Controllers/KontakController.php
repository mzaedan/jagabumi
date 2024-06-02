<?php

namespace App\Http\Controllers;

use App\Http\Requests\BeritaRequest;
use App\Http\Requests\KontakRequest;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('pages.kontak');
    }

    public function store(KontakRequest $request)
    {
        $data = $request->all();
        Kontak::create($data);
        return redirect()->route('kontak')->with('success', 'Pesan Berhasil Dikirim!');
    }
}
