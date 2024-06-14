<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Carbon\Carbon;

class ProjectController extends Controller
{
    public function index()
    {
        $projectItems = Project::all();

        foreach ($projectItems as $item) {
            $item->tanggal = Carbon::parse($item->tanggal)->format('d-m-Y');
        }
        
        return view('pages.project', compact('projectItems'));
    }

    public function show($slug)
    {
        $projectItem = Project::where('slug', $slug)->firstOrFail();

        $projectItem->tanggal = Carbon::parse($projectItem->tanggal)->format('d-m-Y');

        return view('pages.project-detail', compact('projectItem'));
    }

}
