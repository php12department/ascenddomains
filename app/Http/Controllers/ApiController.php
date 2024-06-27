<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getToken()
    {
        $response = Http::withOptions([
            'verify' => false,
        ])->post('https://daaz.com/api/v1/generate/token', [
            'uid' => 'deanc@ascenddomains.com',
            'password' => 'mfSSC99!',
        ]);
        if ($response->ok()) {
            $data = $response->json();
            // Handle the data
        } elseif ($response->serverError()) {
            $data = $response->json();
            // Handle server error
        } elseif ($response->clientError()) {
            $data = $response->json();
            // Handle client error
        }
        var_dump($response);
    }
}
