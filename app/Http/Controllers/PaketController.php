<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    public function getAllPaket()
    {
        $data = Paket::all();
        $data_paket = [
            'code' => 0,
            'info' => 'OK',
            'data' => $data
        ];

        return response()->json($data_paket);
    }

    public function getPaket($id)
    {
        $data_paket = Paket::find($id);

        if ($data_paket) {
            return response()->json([
                'code' => 0,
                'info' => 'OK',
                'data' => $data_paket
            ]);
        } else {
            return response()->json([
                'code' => 1,
                'info' => 'Not Found',
                'data' => null
            ], 404);
        }
    }
}
