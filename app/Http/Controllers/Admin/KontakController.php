<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $items = Kontak::all();

        return view('pages.admin.kontak.index', [
            'items' => $items
        ]);
    }

     public function destroy($id)
    {
        $item = Kontak::findOrFail($id);
        $item->delete();

        return redirect()->route('kontak.index');
    }
}
