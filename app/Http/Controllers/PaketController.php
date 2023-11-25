<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function getPaket()
    {
        $data = Paket::all();
        $data_paket = [
            'code' => 0,
            'info' => 'OK',
            'data' => $data
        ];

        return view('paket.index', ['data_paket' => $data_paket]);
        // return response()->json($data_paket);
    }
}