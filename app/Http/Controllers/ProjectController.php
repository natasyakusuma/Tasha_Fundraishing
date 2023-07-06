<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    public function projectPage()
    {
        return view('pages.public.project');
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

            return redirect()->route('proSaya');
        } else {
            // Permintaan gagal, menampilkan pesan error
            $errorResponse = $response->json();
            return dd($errorResponse);
        }
    }

    public function projectSayaPage()
    {
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get('https://deploytasha.000webhostapp.com/api/campaign');

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            $responseData = $response->json();

            return view('pages.public.projectSaya', compact('responseData'));
        } else {
            // Permintaan gagal, menampilkan pesan error
            $errorResponse = $response->json();
            return dd($errorResponse);
        }
    }

    public function projectDetail($id)
    {
        return view('pages.public.project1');
    }
}