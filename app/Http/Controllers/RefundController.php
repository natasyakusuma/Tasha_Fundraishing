<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RefundController extends Controller
{
    public function refundPage() 
    {
        $token = session('token');
        $userId = session('user_id');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get(env('API_URL').'campaign?id_user='.$userId);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            $responseData = $response->json();
            return view('pages.public.pengembalian_dana.create_return_dana_project', compact('responseData'));
        } else {
            // Permintaan gagal, menampilkan pesan error
            $errorResponse = $response->json();
            error_log($errorResponse['message']);

            if ($errorResponse['error'] == "Unauthorized") {
                session()->invalidate();
                return redirect()->route('login');
            }
        }
    }

    public function refund(Request $request) 
    {
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->attach('file_receipt', $request->file('fileReceipt'))
        ->asForm()->post(env('API_URL').'payment', [
            'id_campaign' => $request->projectName,
            'amount' => $request->amount,
        ]);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            session(['message' => "Pengajuan pengembalian dana diproses"]);
            return redirect()->route('list_return_dana_project');
        } else {
            // Permintaan gagal, menampilkan pesan error
            $errorResponse = $response->json();
            error_log($errorResponse['message']);

            if ($errorResponse['error'] == "Unauthorized") {
                session()->invalidate();
                return redirect()->route('login');
            }
        }
    }

    public function refundSuccessPage() 
    {
        return view('pages.public.pengembalian_dana.success_dana_project');
    }

    public function refundEditPage() 
    {
        return view('pages.public.pengembalian_dana.edit_return_dana_project');
    }

    public function refundSimulation() 
    {
        return view('pages.public.pengembalian_dana.simulation_return_dana_project');
    }

    public function refundListPage()
    {
        $token = session('token');
        $userId = session('user_id');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get(env('API_URL') . 'payment?id_user=' . $userId);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            $responseData = $response->json();
            $message = session('message');
            session()->forget('message');
            return view('pages.public.pengembalian_dana.list_return_dana_project', compact('responseData', 'message'));
        } else {
            // Permintaan gagal, menampilkan pesan error
            $errorResponse = $response->json();
            error_log($errorResponse['message']);

            if ($errorResponse['error'] == "Unauthorized") {
                session()->invalidate();
                return redirect()->route('login');
            }
        }
    }
}
