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
    return view('pages.public.successDana');
})->name('dana-success');

