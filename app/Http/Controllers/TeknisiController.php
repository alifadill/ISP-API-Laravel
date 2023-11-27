<?php

namespace App\Http\Controllers;

use App\Models\Teknisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeknisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAllTeknisi()
    {
        $data = Teknisi::all();
        $data_teknisi = [
            'code' => 0,
            'info' => 'OK',
            'data' => $data
        ];

        return response()->json($data_teknisi);
    }

    public function getTeknisi($id)
    {
        $teknisi = Teknisi::find($id);

        if ($teknisi) {
            $data_teknisi = [
                'code' => 0,
                'info' => 'OK',
                'data' => $teknisi
            ];
        } else {
            $data_teknisi = [
                'code' => 1,
                'info' => 'Not Found',
                'data' => null
            ];
        }

        return response()->json($data_teknisi);
    }


    public function shortTeknisi($id)
    {
        $dataTeknisi = Teknisi::find($id);

        if ($dataTeknisi) {
            $orderCount = DB::table('orders')
                ->where('teknisi_id', $id)
                ->count();

            return response()->json([
                'code' => 0,
                'info' => 'OK',
                'data' => $dataTeknisi,
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
