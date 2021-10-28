<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class peticionapi extends Controller
{
    public function __invoke(Request $request) {
        
        $data = Http::get('https://randomuser.me/api/');
        return view('paso2', ['data' => $data]);
    }
}
