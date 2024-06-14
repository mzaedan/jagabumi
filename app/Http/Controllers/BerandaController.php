<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Carbon\Carbon;

class BerandaController extends Controller
{
    public function index()
    {
        $berandaItems = Project::all();
        
        foreach ($berandaItems as $item) {
            $item->tanggal = Carbon::parse($item->tanggal)->format('d-m-Y');
        }

        return view('pages.beranda', compact('berandaItems'));
    }
}
