<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        // $dati = config("data");

        $train = train::all();

        $dati = [
            "trains" => $train,
            "store" => config("data"),
        ];

        return view('home', $dati);
    }
}
