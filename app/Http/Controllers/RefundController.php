<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
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
        ])->get(env('API_URL').'/campaign?id_user='.$userId);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            //$responseData = $response->json();
            $responseData = collect($response['data'])->where('status','==', 'RUNNING')->all();
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

    public function refundCreate(Request $request) 
    {
        $token = session('token');
        // $response = Http::withHeaders([
        //     'Authorization' => 'Bearer ' . $token,
        // ])->attach('file_receipt', $request->file('fileReceipt'))
        // ->asForm()->post(env('API_URL').'payment/do-payment', [
        //     'id_campaign' => $request->projectName,
        //     'amount' => $request->amount,
        // ]);

        $file = $request->file('fileReceipt');
        $data = [
            'id_campaign' => $request->projectName,
            'amount' => $request->amount,
        ];

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->attach(
            'file_receipt', // Nama file yang diharapkan oleh API (gantilah sesuai dengan kebutuhan)
            file_get_contents($file->getRealPath()), // Baca isi file dan kirimkan sebagai lampiran
            $file->getClientOriginalName() // Nama asli file
        )->post(env('API_URL') . '/payment/do-payment', $data);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            session(['message' => "Pengajuan pengembalian dana diproses"]);
            return redirect()->route('success_dana_project');
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

    // public function refundCreate(Request $request)
    // {
    //     $token = session('token');
    //     $fileReceipt = $request->file('fileReceipt');
    //     $client = new Client();

    //     $response = $client->request('POST', env('API_URL') . 'payment/do-payment', [
    //         'headers' => [
    //             'Authorization' => 'Bearer ' . $token,
    //         ],
    //         'multipart' => [
    //             [
    //                 'name' => 'id_campaign',
    //                 'contents' => $request->projectName,
    //             ],
    //             [
    //                 'name' => 'amount',
    //                 'contents' => $request->amount,
    //             ],
    //             [
    //                 'name' => 'file_receipt',
    //                 'contents' => fopen($fileReceipt->getRealPath(), 'r'),
    //                 'filename' => $fileReceipt->getClientOriginalName(),
    //             ],
    //         ],
    //     ]);

    //     $result = json_decode($response->getBody()->getContents());
    //     if ($result->status == "success") {
    //         // Permintaan berhasil, menampilkan data respons
    //         session(['message' => "Pengajuan pengembalian dana diproses"]);
    //         return redirect()->route('list_return_dana_project');
    //     } else {
    //         // Permintaan gagal, menampilkan pesan error
    //         error_log($result->message);

    //         if ($result->error == "Unauthorized") {
    //             session()->invalidate();
    //             return redirect()->route('login');
    //         }
    //     }
    // }

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
        ])->get(env('API_URL') . '/payment/with-campaign?id_user=' . $userId);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            //$responseData = $response->json();
            $responseData = collect($response['data'])->where('amount','!=',null)->all();
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
