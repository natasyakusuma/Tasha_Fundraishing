<?php

namespace App\Http\Controllers;

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
        ])->get(env('API_URL') . 'campaign?id_user=' . $userId);

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
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->attach('file_document', $request->file('uploadDocument'))
        ->asForm()->post(env('API_URL') . 'campaign-report', [
            'id_campaign' => $request->projectName,
            'document_name' => $request->documentName,
            'is_exported' => 0,
        ]);

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
        ])->get(env('API_URL') . 'campaign-report?id_user=' . $userId . '&include[]=campaign');

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
        ])->get(env('API_URL') . 'campaign-report/' . $id . '?include[]=campaign_report_details');

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
