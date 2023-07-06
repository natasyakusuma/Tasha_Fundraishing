<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function getApiData()
    {
        $client = new Client();
        $url = "https://dummyjson.com/products/1";

        $response = $client->get($url);

        $responseData = json_decode($response->getBody(), true);
        // return dd($responseData);

        return view('pages.public.ujicoba', compact('responseData'));
    }
}
