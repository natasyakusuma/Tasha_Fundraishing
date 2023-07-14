<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    public function projectCreatePage()
    {
        return view('pages.public.daftar_project.create_project');
    }

    public function projectCreate(Request $request)
    {
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->attach('file_prospektus', $request->file('prospektus'))
        ->attach('file_banner[]', $request->file('banner'))
        ->asForm()->post(env('API_URL').'campaign', [
            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type,
            'category' => $request->category,
            'start_date' => $request->startDate,
            'closing_date' => $request->closingDate,
            'current_funding_amount' => 0,
            'target_funding_amount' => $request->targetFundingAmount,
            'tenors' => $request->tenor,
            'profit_share' => $request->profitShare,
            'return_investment_period' => $request->returnInvestmentPeriod,
            'max_sukuk' => $request->sukuk,
            'status' => "WAITING_VERIFICATION",
            'is_approved' => 0,
            'sold_sukuk' => 0,
        ]);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            session(['message' => "Data berhasil dibuat"]);
            return redirect()->route('list_project');
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

    public function projectSuccessPage() 
    {
        return view('pages.public.daftar_project.success_project');
    }

    public function projectEditPage($id) 
    {
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get(env('API_URL').'campaign/' . $id);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            $responseData = $response->json();
            $currentDate = Carbon::now();
            $closingDate = Carbon::parse($responseData['data']['closing_date']);
            $remainingDate = $currentDate->diffInDays($closingDate);
            return view('pages.public.daftar_project.edit_project', compact('responseData', 'remainingDate'));
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

    public function projectUpdate(Request $request, $id) 
    {
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->attach('file_prospektus', $request->file('prospektus'))
        ->attach('file_banner[]', $request->file('banner'))
        ->asForm()->post(env('API_URL').'campaign/'.$id, [
            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type,
            'category' => $request->category,
            'start_date' => $request->startDate,
            'closing_date' => $request->closingDate,
            'current_funding_amount' => $request->currentFundingAmount,
            'target_funding_amount' => $request->targetFundingAmount,
            'tenors' => $request->tenor,
            'profit_share' => $request->profitShare,
            'return_investment_period' => $request->returnInvestmentPeriod,
            'max_sukuk' => $request->sukuk,
            'status' => "WAITING_VERIFICATION",
            'is_approved' => 0,
            'sold_sukuk' => 0,
        ]);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            session(['message' => "Data berhasil diperbarui"]);
            return redirect()->route('list_project');
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

    public function projectListPage()
    {
        $token = session('token');
        $userId = session('user_id');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get(env('API_URL') . 'campaign?id_user=' . $userId);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            $responseData = $response->json();
            $message = session('message');
            session()->forget('message');
            return view('pages.public.daftar_project.list_project', compact('responseData', 'message'));
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

    public function projectDetailPage($id)
    {
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get(env('API_URL').'campaign/' . $id . '?include[]=banners&include[]=user');

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            $responseData = $response->json();
            $currentDate = Carbon::now();
            $closingDate = Carbon::parse($responseData['data']['closing_date']);
            $remainingDate = $currentDate->diffInDays($closingDate);
            return view('pages.public.daftar_project.detail_project', compact('responseData', 'remainingDate'));
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

    public function projectWithdrawPage($id)
    {
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->get(env('API_URL').'campaign/' . $id);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            $responseData = $response->json();
            $currentDate = Carbon::now();
            $closingDate = Carbon::parse($responseData['data']['closing_date']);
            $remainingDate = $currentDate->diffInDays($closingDate);
            $totalWithDraw = ($responseData['data']['current_funding_amount']-110000);
            return view('pages.public.daftar_project.detail_withdraw_project', compact('responseData', 'remainingDate', 'totalWithDraw'));
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

    public function projectWithdraw(Request $request, $id)
    {
        $token = session('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $token,
        ])->asForm()->post(env('API_URL').'withdraw?id_campaign='.$id, [
            'amount' => $request->amount,
            'service_fee' => 10000,
            'registration_fee' => 100000,
        ]);

        if ($response->successful()) {
            // Permintaan berhasil, menampilkan data respons
            $errorResponse = $response->json();
            session(['message' => "Penarikan dana diproses"]);
            return redirect()->route('list_project');
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
