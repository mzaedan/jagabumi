<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\DashboardController;
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
Route::get('/beranda', [App\Http\Controllers\BerandaController::class, 'index'])->name('beranda');
Route::get('/project', [App\Http\Controllers\ProjectController::class, 'index'])->name('project');
Route::get('/project/detail', [App\Http\Controllers\ProjectController::class, 'detail'])->name('project-detail');
Route::get('/berita', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita');
Route::get('/berita/detail', [App\Http\Controllers\BeritaController::class, 'detail'])->name('berita-detail');
Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('kontak');

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);


Route::prefix('admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::resource('project', ProjectController::class);
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });

// Route::get('/project/index', [App\Http\Controllers\Admin\ProjectController::class, 'index'])->name('project-index');
// Route::get('/project/create', [App\Http\Controllers\Admin\ProjectController::class, 'create'])->name('project-create');

//Baru Test
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);


// routes faat
Route::prefix('user')
    ->group(function () {
        Route::get('/beranda', [BerandaController::class, 'index'])->name('user.beranda.index');
        Route::get('/project', [ProjectControllerUser::class, 'index'])->name('user.project.index');
        Route::get('/project/{id}', [ProjectControllerUser::class, 'show'])-> name('user.project.show');  
    });