<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('pages.project');
    }

    public function detail()
    {
        return view('pages.project-detail');
    }
}
