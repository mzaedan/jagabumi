<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Project::all();

        return view('pages.admin.project.index', [
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_kegiatan);
        $data['foto'] = $request->file('foto')->store(
            'assets/gallery', 'public'
        );

        Project::create($data);
        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Project::findOrFail($id);

        return view('pages.admin.project.view',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Project::findOrFail($id);

        return view('pages.admin.project.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProjectRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_kegiatan);
        $data['foto'] = $request->file('foto')->store(
            'assets/gallery', 'public'
        );

        $item = Project::findOrFail($id);
        $item->update($data);

        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Project::findOrFail($id);
        $item->delete();

        return redirect()->route('project.index');
    }
}
