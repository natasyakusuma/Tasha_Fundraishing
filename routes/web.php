<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
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
Route::get('/registrasi-phase2', [AuthController::class, 'regPage2'])->name('reg2');
Route::get('/registrasi-success', [AuthController::class, 'regPage3'])->name('reg3-success');

Route::middleware('auth.check')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'dashboardPage'])->name('dashboard');

    Route::prefix('project')->group(function () {
        Route::get('/', [ProjectController::class, 'projectPage'])->name('pro1');
        Route::post('/', [ProjectController::class, 'project'])->name('projectForm');
        Route::get('/list', [ProjectController::class, 'projectSayaPage'])->name('proSaya');
        // Route::get('/{id}', [ProjectController::class, 'projectDetail'])->name('pro2');
    });
});

Route::get('/profile', function () {
    return view('pages.public.profile');
})->name('profile');

Route::get('/project1', function () {
    return view('pages.public.project1');
})->name('pro2');

Route::get('/projectDana', function () {
    return view('pages.public.projectDana');
})->name('proDana');

Route::get('/successDana', function () {
    return view('pages.public.successProject');
})->name('pro-success');

Route::get('/successTarikDana', function () {
    return view('pages.public.successTarikDana');
})->name('pro-succesTD');

Route::get('/laporanSaya', function () {
    return view('pages.public.laporanProjectSaya');
})->name('proLaporanSaya');

Route::get('/successCreateProject', function () {
    return view('pages.public.createProjectSuccess');
})->name('pro-succesCreate');

Route::get('/detailLaporanSaya', function () {
    return view('pages.public.detailLaporanProject');
})->name('detailLaporanSaya');

Route::get('/ReturnDanaSaya', function () {
    return view('pages.public.returnProject');
})->name('ReturnDana');

Route::get('/PengembalianDana', function () {
    return view('pages.public.pengembalianDanaSaya');
})->name('myReturnDana');

Route::get('/SimulasiDana', function () {
    return view('pages.public.simulationDana');
})->name('DanaSimul');

Route::get('/createProject', function () {
    return view('pages.public.createDocProject');
})->name('proCreate');

Route::get('/returnProject', function () {
    return view('pages.public.returnProject');
})->name('proReturn');

Route::get('/ujicoba', [Controller::class, 'getApiData']);
