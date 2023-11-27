<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaketController extends Controller
{
    public function getAllPaket()
    {
        // $data = Paket::all();
        $data = Paket::withCount('orders')->orderBy('orders_count','DESC')->get();

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
    public function shortPaket($id)
    {
        $data_paket = Paket::find($id);

        if ($data_paket) {
            $orderCount = DB::table('orders')
                ->where('paket_id', $id)
                ->count();

            return response()->json([
                'code' => 0,
                'info' => 'OK',
                'data' => $data_paket,
                'order_count' => $orderCount,
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
