<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Kontak;
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard',[
            'jumlah_project_aktif' => Project::where('status_project', 'Aktif')->count(),
            'jumlah_project_tidak_aktif' => Project::where('status_project', 'Tidak Aktif')->count(),
            'jumlah_berita' => Berita::count(),
            'jumlah_pesan' => Kontak::count(),
        ]);
    }
}
