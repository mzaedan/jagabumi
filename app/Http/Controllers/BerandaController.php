<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class BerandaController extends Controller
{
    public function index()
    {
        $berandaItems = Project::all();
        return view('pages.beranda', compact('berandaItems'));
    }
}
