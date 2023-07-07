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

    public function reg1(Request $request)
    {
        $response = Http::asForm()->post('https://deploytasha.000webhostapp.com/api/register', [
            'full_name' => $request->fullName,
            'email' => $request->email,
            'password' => $request->password,
            're_password' => $request->rePassword,
            'date_of_birth' => $request->dateOfBirth,
            'gender' => $request->gender,
            'employment_status' => $request->employmentStatus,
            'phone_number' => $request->phone,
            'id_card' => $request->nik,
            'tax_registration_number' => 9871234567892,
            'authorization_level' => 2
        ]);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            return redirect()->route('reg2');
        } else {
            // Permintaan gagal, menampilkan pesan error
            $errorResponse = $response->json();
            return dd($errorResponse);
        }
    }

    public function regPage2()
    {
        return view('pages.auth.registrasi2');
    }

    public function reg2(Request $request)
    {
        $response = Http::asForm()->post('https://deploytasha.000webhostapp.com/api/user', [
            'user_business_name' => $request->businessName,
            'user_business_address' => $request->businessAddress,
            'account_number' => $request->accountNumber,
            'bank_name' => $request->bankName,
            'account_name' => $request->accountName,
            'file_certificate' => $request->certificate,
        ]);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            return redirect()->route('reg3-success');
        } else {
            // Permintaan gagal, menampilkan pesan error
            $errorResponse = $response->json();
            return dd($errorResponse);
        }
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
