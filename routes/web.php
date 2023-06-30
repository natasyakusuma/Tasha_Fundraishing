<?php

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

Route::get('/login', function () {
    return view('pages.auth.login');
})->name('login');

Route::get('/registrasi', function () {
    return view('pages.auth.registrasi');
})->name('reg1');

Route::get('/registrasi1', function () {
    return view('pages.auth.registrasi1');
})->name('reg2');


Route::get('/successReg', function () {
    return view('pages.auth.successRegistrasi');
})->name('reg3-success');

Route::get('/profile', function () {
    return view('pages.public.profile');
})->name('profile');


Route::get('/dashboard', function () {
    return view('pages.public.index');
})->name('dashboard');


Route::get('/project', function () {
    return view('pages.public.project');
})->name('pro1');

Route::get('/project1', function () {
    return view('pages.public.project1');
})->name('pro2');

Route::get('/projectDana', function () {
    return view('pages.public.projectDana');
})->name('proDana');

Route::get('/projectSaya', function () {
    return view('pages.public.projectSaya');
})->name('proSaya');

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

