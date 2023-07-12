<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('loginForm');
Route::get('/registrasi-phase1', [AuthController::class, 'regPage1'])->name('reg1');
Route::post('/registrasi-phase1', [AuthController::class, 'reg1'])->name('reg1Form');
Route::get('/registrasi-phase2', [AuthController::class, 'regPage2'])->name('reg2');
Route::post('/registrasi-phase2', [AuthController::class, 'reg2'])->name('reg2Form');
Route::get('/registrasi-success', [AuthController::class, 'regPage3'])->name('reg3-success');

Route::middleware('auth.check')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'dashboardPage'])->name('dashboard');

    Route::prefix('project')->group(function () {
        Route::get('/', [ProjectController::class, 'projectPage'])->name('create_project');
        Route::post('/', [ProjectController::class, 'project'])->name('projectForm');
        Route::get('/list', [ProjectController::class, 'projectListPage'])->name('list_project');
        Route::get('/{id}', [ProjectController::class, 'projectDetailPage'])->name('detail_project');
    });

    Route::prefix('project-report')->group(function () {
        // Route::get('/', [ProjectController::class, 'projectPage'])->name('create_project');
        // Route::post('/', [ProjectController::class, 'project'])->name('projectForm');
        Route::get('/list', [ReportController::class, 'projectReportListPage'])->name('list_laporan_project');
        Route::get('/{id}', [ReportController::class, 'projectReportDetailPage'])->name('detail_laporan_project');
    });

    Route::prefix('project-dana')->group(function () {
    
    });
});
Route::get('/view_profile', function () {
    return view('pages.public.profile.view_profile');
})->name('view_profile');

Route::get('/edit_profile', function () {
    return view('pages.public.profile.edit_profile');
})->name('edit_profile');

// Route - Project
Route::get('/view_project', function () {
    return view('pages.public.daftar_project.view_project');
})->name('view_project');

Route::get('/edit_project', function () {
    return view('pages.public.daftar_project.edit_project');
})->name('edit_project');

Route::get('/success_project', function () {
    return view('pages.public.daftar_project.success_project');
})->name('success_project');

Route::get('/detail_withdraw_project', function () {
    return view('pages.public.daftar_project.detail_withdraw_project');
})->name('detail_withdraw_project');



// Route - Laporan Project
Route::get('/create_laporan_project', function () {
    return view('pages.public.laporan_project.create_laporan_project');
})->name('create_laporan_project');

Route::get('/detail_laporan_saya_project', function () {
    return view('pages.public.laporan_project.detail_laporan_project');
})->name('detail_laporan_project');

Route::get('/edit_laporan_project', function () {
    return view('pages.public.laporan_project.edit_laporan_project');
})->name('edit_laporan_project');

Route::get('/view_laporan_project', function () {
    return view('pages.public.laporan_project.view_project');
})->name('view_laporan_project');

Route::get('/success_laporan_project', function () {
    return view('pages.public.laporan_project.success_laporan_project');
})->name('success_laporan_project');


// Route - Return Dana
Route::get('/create_return_dana', function () {
    return view('pages.public.pengembalian_dana.create_return_dana_project');
})->name('create_return_dana');

Route::get('/view_return_dana_project', function () {
    return view('pages.pengembalian_dana.view_return_dana_project');
})->name('view_return_dana_project');

Route::get('/edit_return_dana_project', function () {
    return view('pages.pengembalian_dana.edit_return_dana_project');
})->name('/edit_return_dana_project');


Route::get('/list_return_dana_project', function () {
    return view('pages.public.pengembalian_dana.list_return_dana_project');
})->name('list_return_dana_project');

Route::get('/simulation_return_dana_project', function () {
    return view('pages.public.pengembalian_dana.simulation_return_dana_project');
})->name('simulation_return_dana_project');

Route::get('/success_dana_project', function () {
    return view('pages.public.pengembalian_dana.success_dana_project');
})->name('success_dana_project');
