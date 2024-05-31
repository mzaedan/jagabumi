<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BeritaRequest;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Berita::all();

        return view('pages.admin.berita.index', [
            'items' => $items
        ]);
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
        $data['foto'] = $request->file('foto')->store(
            'assets/gallery/berita', 'public'
        );

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
        $data['foto'] = $request->file('foto')->store(
            'assets/gallery/berita', 'public'
        );

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
