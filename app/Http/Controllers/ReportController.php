<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReportController extends Controller
{
    public function projectReportCreatePage() 
    {
        $token = session('token');
        $userId = session('user_id');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get(env('API_URL') . '/campaign?id_user=' . $userId);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            $responseData = $response->json();
            return view('pages.public.laporan_project.create_laporan_project', compact('responseData'));
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

    public function projectReportCreate(Request $request) 
    {
        $token = session('token');
        $uploadDocument = $request->file('uploadDocument');
        $data = [
            'id_campaign' => $request->projectName,
            'document_name' => $request->documentName,
            'is_exported' => 0,
        ];

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->attach(
            'file_document', // Nama file yang diharapkan oleh API (gantilah sesuai dengan kebutuhan)
            file_get_contents($uploadDocument->getRealPath()), // Baca isi file dan kirimkan sebagai lampiran
            $uploadDocument->getClientOriginalName() // Nama asli file
        )->post(env('API_URL') . '/campaign-report', $data);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            session(['message' => "Laporan berhasil dibuat"]);
            return redirect()->route('list_laporan_project');
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

    // public function projectReportCreate(Request $request)
    // {
    //     $token = session('token');
    //     $uploadDocument = $request->file('uploadDocument');
    //     $client = new Client();

    //     $response = $client->request('POST', env('API_URL') . '/campaign-report', [
    //         'headers' => [
    //             'Authorization' => 'Bearer ' . $token,
    //         ],
    //         'multipart' => [
    //             [
    //                 'name' => 'id_campaign',
    //                 'contents' => $request->projectName,
    //             ],
    //             [
    //                 'name' => 'document_name',
    //                 'contents' => $request->documentName,
    //             ],
    //             [
    //                 'name' => 'file_document',
    //                 'contents' => fopen($uploadDocument->getRealPath(), 'r'),
    //                 'filename' => $uploadDocument->getClientOriginalName(),
    //             ],
    //             [
    //                 'name' => 'is_exported',
    //                 'contents' => 0,
    //             ],
    //         ],
    //     ]);

    //     $result = json_decode($response->getBody()->getContents());
    //     if ($result->status == "success") {
    //         // Permintaan berhasil, menampilkan data respons
    //         session(['message' => "Laporan berhasil dibuat"]);
    //         return redirect()->route('list_laporan_project');
    //     } else {
    //         // Permintaan gagal, menampilkan pesan error
    //         error_log($result->message);

    //         if ($result->error == "Unauthorized") {
    //             session()->invalidate();
    //             return redirect()->route('login');
    //         }
    //     }
    // }

    public function projectReportSuccessPage() 
    {
        return view('pages.public.laporan_project.success_laporan_project');
    }

    public function projectReportEditPage() 
    {
        return view('pages.public.laporan_project.edit_laporan_project');
    }

    public function projectReportListPage()
    {
        $token = session('token');
        $userId = session('user_id');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get(env('API_URL') . '/campaign-report?id_user=' . $userId . '&include[]=campaign');

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            $responseData = $response->json();
            $message = session('message');
            session()->forget('message');
            return view('pages.public.laporan_project.list_laporan_project', compact('responseData', 'message'));
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

    public function projectReportDetailPage($id)
    {
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get(env('API_URL') . '/campaign-report/' . $id . '?include[]=campaign_report_details');

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            $responseData = $response->json();
            return view('pages.public.laporan_project.detail_laporan_project', compact('responseData'));
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
