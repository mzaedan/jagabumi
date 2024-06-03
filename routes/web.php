<?php

use App\Http\Controllers\Admin\BeritaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KontakController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProjectController as ControllersProjectController;

// import faat
use App\Http\Controllers\ProjectController as ProjectControllerUser;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\BerandaController::class, 'index'])->name('beranda');
Route::get('/beranda', [BerandaController::class, 'index'])->name('user.beranda.index');
Route::get('/beranda/{slug}', [ProjectControllerUser::class, 'show'])-> name('user.beranda.show');

Route::get('/project', [ProjectControllerUser::class, 'index'])->name('user.project.index');
Route::get('/project/{slug}', [ProjectControllerUser::class, 'show'])-> name('user.project.show');

Route::get('/berita', [App\Http\Controllers\BeritaController::class, 'index'])->name('user.berita.index');
Route::get('/berita/{slug}', [App\Http\Controllers\BeritaController::class, 'show'])->name('user.berita.show');


Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('kontak');
Route::post('/kontak/store', [App\Http\Controllers\KontakController::class, 'store'])->name('kontak.store');

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);



Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::resource('project', ProjectController::class);
        Route::resource('berita', BeritaController::class);
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');
        Route::delete('/kontak/{id}/destroy', [KontakController::class, 'destroy'])->name('kontak.destroy');
    });


