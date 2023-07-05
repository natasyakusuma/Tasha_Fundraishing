<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginPage(){
        return view('pages.auth.login');
    }

    public function login(Request $request){
        $client = new Client();
        $url = "https://deploytasha.000webhostapp.com/api/login";
        $params = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            // Tambahkan parameter lain sesuai kebutuhan
        ];
   
        $response = $client->request('POST', $url,[
            'json' => $params,
            'verify'=> false,
        ]);

        $responseData = json_decode($response->getBody());
        return dd($responseData);
       
        // return view('pages.auth.index', compact('responseData'));
    }

}
