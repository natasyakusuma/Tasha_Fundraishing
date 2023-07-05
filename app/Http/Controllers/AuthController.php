<?php

namespace App\Http\Controllers;
<<<<<<< HEAD

=======
use GuzzleHttp\Client;
>>>>>>> 33e7db5be10da1cb84b62c4c2146939475370573
use Illuminate\Http\Request;

class AuthController extends Controller
{
<<<<<<< HEAD
    //
=======
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

>>>>>>> 33e7db5be10da1cb84b62c4c2146939475370573
}
