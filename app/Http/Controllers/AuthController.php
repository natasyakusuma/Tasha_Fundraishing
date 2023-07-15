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
        $response = Http::asForm()->post(env('API_URL') . 'login', [
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            $responseData = $response->json();
            session(['token' => $responseData['authorization']['token']]);
            session(['user_id' => $responseData['user']['id']]);
            return redirect()->route('dashboard');
        } else {
            // Permintaan gagal, menampilkan pesan error
            $errorResponse = $response->json();
            error_log($errorResponse['message']);
            return redirect()->back();
        }
    }

    public function regPage1()
    {
        return view('pages.auth.registrasi1');
    }

    public function reg1(Request $request)
    {
        $response = Http::asForm()->post(env('API_URL') . 'register', [
            'full_name' => $request->fullName,
            'email' => $request->email,
            'password' => $request->password,
            're_password' => $request->rePassword,
            'date_of_birth' => $request->dateOfBirth,
            'gender' => $request->gender,
            'employment_status' => $request->employmentStatus,
            'phone_number' => $request->phone,
            'id_card' => $request->nik,
            'tax_registration_number' => $request->npwp,
            'authorization_level' => 2
        ]);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            $responseData = $response->json();
            session(['token' => $responseData['authorization']['token']]);
            session(['user_id' => $responseData['data']['id']]);
            return redirect()->route('reg2');
        } else {
            // Permintaan gagal, menampilkan pesan error
            $errorResponse = $response->json();
            error_log($errorResponse['message']);
            return redirect()->back();
        }
    }

    public function regPage2()
    {
        return view('pages.auth.registrasi2');
    }

    public function reg2(Request $request)
    {
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->asForm()->post(env('API_URL') . 'user', [
            'user_business_name' => $request->businessName,
            'user_business_address' => $request->businessAddress,
            'account_number' => $request->accountNumber,
            'bank_name' => $request->bankName,
            'account_name' => $request->accountName,
            'file_certificate' => $request->file('certificate'),
        ]);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            // $responseData = $response->json();
            // return dd($responseData);
            return redirect()->route('reg3-success');
        } else {
            // Permintaan gagal, menampilkan pesan error
            $errorResponse = $response->json();
            error_log($errorResponse['message']);
            return redirect()->back();
        }
    }

    public function regPage3()
    {
        return view('pages.auth.registrasi_success');
    }

    public function logout()
    {
        $token = session('token');
        Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->post(env('API_URL') . 'logout');

        session()->invalidate();
        return redirect()->route('login');
    }
}
