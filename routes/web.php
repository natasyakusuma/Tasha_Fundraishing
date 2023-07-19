<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RefundController;
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

    // Route - Profile
    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'profilePage'])->name('view_profile');
        Route::get('/edit/{id}', [ProfileController::class, 'profileEditPage'])->name('edit_profile');
    });

    // Route - Proyek
    Route::prefix('proyek')->group(function () {
        Route::get('/create', [ProjectController::class, 'projectCreatePage'])->name('create_project');
        Route::post('/create', [ProjectController::class, 'projectCreate'])->name('projectCreateForm');
        Route::post('/success', [ProjectController::class, 'projectSuccessPage'])->name('success_project');
        Route::get('/edit/{id}', [ProjectController::class, 'projectEditPage'])->name('edit_project');
        Route::post('/update/{id}', [ProjectController::class, 'projectUpdate'])->name('projectUpdateForm');
        Route::get('/list', [ProjectController::class, 'projectListPage'])->name('list_project');
        Route::get('/{id}', [ProjectController::class, 'projectDetailPage'])->name('detail_project');
        Route::get('/penarikan-dana/{id}', [ProjectController::class, 'projectWithdrawPage'])->name('detail_withdraw_project');
        Route::post('/penarikan-dana/{id}', [ProjectController::class, 'projectWithdraw'])->name('withdrawFrom');
    });

    // Route - Laporan proyek
    Route::prefix('laporan-proyek')->group(function () {
        Route::get('/create', [ReportController::class, 'projectReportCreatePage'])->name('create_laporan_project');
        Route::post('/create', [ReportController::class, 'projectReportCreate'])->name('projectReportCreateForm');
        Route::post('/success', [ReportController::class, 'projectReportSuccessPage'])->name('success_laporan_project');
        Route::get('/edit', [ReportController::class, 'projectReportEditPage'])->name('edit_laporan_project');
        Route::get('/list', [ReportController::class, 'projectReportListPage'])->name('list_laporan_project');
        Route::get('/{id}', [ReportController::class, 'projectReportDetailPage'])->name('detail_laporan_project');
    });

    // Route - Pengembalian dana
    Route::prefix('pengembalian-dana')->group(function () {
        Route::get('/create', [RefundController::class, 'refundPage'])->name('create_return_dana');
        Route::post('/create', [RefundController::class, 'refundCreate'])->name('refundCreateForm');
        Route::post('/success', [RefundController::class, 'refundSuccessPage'])->name('success_dana_project');
        Route::get('/edit', [RefundController::class, 'refundEditPage'])->name('edit_return_dana_project');
        Route::get('simulasi', [RefundController::class, 'refundSimulation'])->name('simulation_return_dana_project');
        Route::get('/list', [RefundController::class, 'refundListPage'])->name('list_return_dana_project');
    });
});

// Route - Laporan Project
Route::get('/view_laporan_project', function () {
    return view('pages.public.laporan_project.view_laporan_project');
})->name('view_laporan_project');

// Route - Return Dana
Route::get('/view_return_dana_project', function () {
    return view('pages.public.pengembalian_dana.view_return_dana_project');
})->name('view_return_dana_project');
