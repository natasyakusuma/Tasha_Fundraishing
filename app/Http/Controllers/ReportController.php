<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ReportController extends Controller
{
    public function projectReportListPage()
    {
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get('https://deploytasha.000webhostapp.com/api/campaign-report');

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            $responseData = $response->json();
            return view('pages.public.laporan_project.list_laporan_project', compact('responseData'));

       
        } else {
            // Permintaan gagal, menampilkan pesan error
            $errorResponse = $response->json();
            return dd($errorResponse);
        }
    }

    public function projectReportDetailPage($id)
    {
        // $token = session('token');
        // $response = Http::withHeaders([
        //     'Authorization' => 'Bearer ' . $token,
        // ])->get('https://deploytasha.000webhostapp.com/api/campaign-report/' . $id);

        // if ($response->successful()) {
        //     // Permintaan berhasil, menampilkan data respons
        //     $responseData = $response->json();
        //     return view('pages.public.laporan_project.detail_laporan_project', compact('responseData'));
        // } else {
        //     // Permintaan gagal, menampilkan pesan error
        //     $errorResponse = $response->json();
        //     return dd($errorResponse);
        // }

        return view('pages.public.laporan_project.detail_laporan_project');
    }
}
