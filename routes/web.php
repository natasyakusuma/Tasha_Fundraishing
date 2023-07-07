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
});

Route::get('/profile', function () {
    return view('pages.public.profile');
})->name('profile');

Route::get('/success_project', function () {
    return view('pages.public.daftar_project.success_project');
})->name('success_project');

Route::get('/create_laporan_project', function () {
    return view('pages.public.laporan_project.create_laporan_project');
})->name('create_laporan_project');

Route::get('/success_project', function () {
    return view('pages.public.laporan_project.success_laporan_project');
})->name('success_laporan_project');



Route::get('/create_return_dana', function () {
    return view('pages.public.pengembalian_dana.create_return_dana_project');
})->name('create_return_dana');

Route::get('/list_dana_project', function () {
    return view('pages.public.pengembalian_dana.list_dana_project');
})->name('list_dana_project');

Route::get('/return_dana_project', function () {
    return view('pages.public.pengembalian_dana.return_dana_project');
})->name('return_dana_project');

Route::get('/simulation_return_dana_project', function () {
    return view('pages.public.pengembalian_dana.simulation_return_dana_project');
})->name('simulation_return_dana_project');

Route::get('/success_dana_project', function () {
    return view('pages.public.pengembalian_dana.success_dana_project');
})->name('success_dana_project');
