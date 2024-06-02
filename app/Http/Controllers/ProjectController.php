<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projectItems = Project::all();
        return view('pages.project', compact('projectItems'));
    }

    public function show($slug)
    {
        $projectItem = Project::where('slug', $slug)->firstOrfail();
        return view('pages.project-detail', compact('projectItem'));
    }
}
