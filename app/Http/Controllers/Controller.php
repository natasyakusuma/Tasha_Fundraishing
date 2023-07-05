<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
=======
use GuzzleHttp\Client;
>>>>>>> 33e7db5be10da1cb84b62c4c2146939475370573
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
<<<<<<< HEAD
=======
    public function getApiData()
    {
        $client = new Client();
        $url = "https://dummyjson.com/products/1";
   
        $response = $client->get($url);

        $responseData = json_decode($response->getBody(), true);
        // return dd($responseData);
       
        return view('pages.public.ujicoba', compact('responseData'));
    }
>>>>>>> 33e7db5be10da1cb84b62c4c2146939475370573
}
