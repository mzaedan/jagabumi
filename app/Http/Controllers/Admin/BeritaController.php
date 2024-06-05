<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BeritaRequest;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(request()->ajax())
        {
            $query = Berita::query();

            return DataTables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
                                    Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="' . route('berita.show', $item->id). '">
                                        Detail
                                    </a>
                                    <a class="dropdown-item" href="' . route('berita.edit', $item->id). '">
                                        Sunting
                                    </a>
                                    <form action="'. route('berita.destroy', $item->id) .'" method="POST" onsubmit="return confirm(\'Apakah Anda Ingin Menghapus Data Ini?\')">
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
        return view('pages.admin.berita.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BeritaRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->judul_berita);

        if ($request->file('foto') !== null) {
            $data['foto'] = $request->file('foto')->store('assets/berita', 'public');
        }

        Berita::create($data);
        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Berita::findOrFail($id);

        return view('pages.admin.berita.view',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Berita::findOrFail($id);

        return view('pages.admin.berita.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BeritaRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->judul_berita);

        if ($request->file('foto') !== null) {
            $data['foto'] = $request->file('foto')->store('assets/berita', 'public');
        }

        $item = Berita::findOrFail($id);
        $item->update($data);

        return redirect()->route('berita.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $item = Berita::findOrFail($id);
        $item->delete();

        return redirect()->route('berita.index');
    }
}