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
        // $data = Teknisi::all();
        // query sql => SELECT teknisis.name, teknisis.id, COUNT(orders.teknisi_id) as total_order FROM orders RIGHT JOIN teknisis ON orders.teknisi_id=teknisis.id GROUP BY teknisis.id ORDER BY `total_order` DESC

        // query builder Laravel ""
        // $data = Teknisi::join('orders', 'orders.teknisi_id', '=', 'teknisi.id', 'LEFT')
        //         ->select('teknisi.name', 'teknisi.id', 'orders.teknisi_id')
        //         ->groupBy('teknisi.id')
        //         ->orderBy('orders_count', 'DESC')
        //         ->get();

        //
        $data = Teknisi::withCount('orders')->orderBy('orders_count', 'DESC')->get();
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
