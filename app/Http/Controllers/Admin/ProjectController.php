<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request()->ajax())
        {
            $query = Project::query();

            return DataTables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
                                    Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . route('project.show', $item->id). '">
                                        Detail
                                    </a>
                                    <a class="dropdown-item" href="' . route('project.edit', $item->id). '">
                                        Sunting
                                    </a>
                                    <form action="'. route('project.destroy', $item->id) .'" method="POST" onsubmit="return confirm(\'Apakah Anda Ingin Menghapus Data Ini?\')">
                                        '. method_field('delete') . csrf_field() . '
                                        <button type="submit" class="dropdown-item text-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
                })
                ->editColumn('foto', function ($item) {
                    return $item->foto ? '<img src="' . asset('storage/'.$item->foto) . '" style="max-height: 80px;"/>' : '';
                })
                ->addColumn('no', function($item) {
                    static $count = 1;
                    return $count++;
                })
               
                ->rawColumns(['action', 'no', 'foto',])
                ->make();

        }
        return view('pages.admin.project.index');
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

        if ($request->file('foto') !== null) {
            $data['foto'] = $request->file('foto')->store('assets/project', 'public');
        }

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
        
       if ($request->file('foto') !== null) {
            $data['foto'] = $request->file('foto')->store('assets/project', 'public');
        }

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
