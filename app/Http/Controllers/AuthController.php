<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('pages.auth.login');
    }

    public function login(Request $request)
    {
        $response = Http::asForm()->post('https://deploytasha.000webhostapp.com/api/login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            $responseData = $response->json();
            session(['token' => $responseData['authorisation']['token']]);

            return redirect()->route('dashboard');
        } else {
            // Permintaan gagal, menampilkan pesan error
            $errorResponse = $response->json();
            return dd($errorResponse);
        }
    }

    public function regPage1()
    {
        return view('pages.auth.registrasi1');
    }

    // public function reg1(Request $request)
    // {
    //     $response = Http::asForm()->post('https://deploytasha.000webhostapp.com/api/user/register', [
    //         'email' => $request->email,
    //         'password' => $request->password,
    //     ]);

    //     if ($response->successful()) {
    //         // Permintaan berhasil, menampilkan data respons

    //         return redirect()->route('dashboard');
    //     } else {
    //         // Permintaan gagal, menampilkan pesan error
    //         $errorResponse = $response->json();
    //         return dd($errorResponse);
    //     }
    // }

    public function regPage2()
    {
        return view('pages.auth.registrasi2');
    }

    public function regPage3()
    {
        return view('pages.auth.success_registrasi');
    }

    public function logout()
    {
        $token = session('token');
        $response = Http::withToken($token)->post('https://deploytasha.000webhostapp.com/api/logout');

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            session()->invalidate();

            return redirect()->route('login');
        } else {
            // Permintaan gagal, menampilkan pesan error
            $errorResponse = $response->json();
            return dd($errorResponse);
        }
    }
}
