<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $beritaItems = Berita::all();
        return view('pages.berita', compact('beritaItems'));
    }

    public function show($slug)
    {
        $beritaItem = Berita::where('slug', $slug)->firstOrfail();
        return view('pages.berita-detail', compact('beritaItem'));
    }
}
