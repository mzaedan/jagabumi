<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kontak;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class KontakController extends Controller
{
    public function index()
    {
        if(request()->ajax())
        {
            $query = Kontak::query();

            return DataTables::of($query)
                ->addColumn('action', function($item) {
                    return '
                        <div class="btn-group">
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
                                    Aksi
                                </button>
                                <div class="dropdown-menu">
                                    <form action="'. route('kontak.destroy', $item->id) .'" method="POST" onsubmit="return confirm(\'Apakah Anda Ingin Menghapus Data Ini?\')">
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
                ->addColumn('no', function($item) {
                    static $count = 1;
                    return $count++;
                })
               
                ->rawColumns(['action', 'no',])
                ->make();

        }
        return view('pages.admin.kontak.index');
    }

     public function destroy($id)
    {
        $item = Kontak::findOrFail($id);
        $item->delete();

        return redirect()->route('kontak.index');
    }
}
