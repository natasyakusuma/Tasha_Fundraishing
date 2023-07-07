<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    public function projectPage()
    {
        return view('pages.public.daftar_project.create_project');
    }

    public function project(Request $request)
    {
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->asForm()->post('https://deploytasha.000webhostapp.com/api/campaign', [
            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type,
            'category' => $request->category,
            'start_date' => $request->startDate,
            'closing_date' => $request->closingDate,
            'target_funding_amount' => $request->targetFundingAmount,
            'tenors' => $request->tenor,
            'profit_share' => $request->profitShare,
            'return_investment_period' => $request->returnInvestmentPeriod,
            'max_sukuk' => $request->sukuk,
            'file_prospektus' => $request->prospektus,
            'file_banner' => $request->banner,
        ]);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            return redirect()->route('list_project');
        } else {
            // Permintaan gagal, menampilkan pesan error
            $errorResponse = $response->json();
            return dd($errorResponse);
        }
    }

    public function projectListPage()
    {
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get('https://deploytasha.000webhostapp.com/api/campaign');

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            $responseData = $response->json();
            return view('pages.public.daftar_project.list_project', compact('responseData'));
        } else {
            // Permintaan gagal, menampilkan pesan error
            $errorResponse = $response->json();
            return dd($errorResponse);
        }
    }

    public function projectDetailPage($id)
    {
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get('https://deploytasha.000webhostapp.com/api/campaign/' . $id);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            $responseData = $response->json();
            return view('pages.public.daftar_project.detail_project', compact('responseData'));
        } else {
            // Permintaan gagal, menampilkan pesan error
            $errorResponse = $response->json();
            return dd($errorResponse);
        }
    }
}
