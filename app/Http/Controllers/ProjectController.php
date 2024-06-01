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

    public function show($id)
    {
        $projectItem = Project::findOrFail($id);
        return view('pages.project-detail', compact('projectItem'));
    }
}
