<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;
use Illuminate\Support\Facades\Http;

class infocontroller extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $data = $response->json();
        return view('data',compact('data'));
    }
}
