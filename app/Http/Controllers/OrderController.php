<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::paginate(10);
        // dd($orders);
        return response()->json([
            'code'=>'0',
            'info'=>'OK',
            'data'=>$orders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     $order = Order::create([
    //         // ''
    //     ]);
    //     return response()->json([
    //         'data'=>$order
    //     ]);
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $order = Order::create([
            'address'=>$request->address,
            'subdistrict'=>$request->subdistrict,
            'city'=>$request->city,
        ]);
        // $order->'status_id'=>$request->status_id,
        // 'user_id'=>$request->user_id,
        // 'teknisi_id'=>$request->teknisi_id,
        // 'paket_id'=>$request->paket_id
        return response()->json([
            'code'=>'0',
            'info'=>'OK',
            'data'=>$order
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        // dd($order);
        $status = $order->status;
        dd($status);
        return response()->json([
            'code'=>'0',
            'info'=>'OK',
            'data'=>$order
        ], 200
    );
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $order->address = $request->address;
        $order->subdistrict = $request->subdistrict;
        $order->city = $request->city;
        $order->status_id = $request->status_id;
        $order->user_id = $request->user_id;
        $order->teknisi_id = $request->teknisi_id;
        $order->paket_id = $request->paket_id;
        $order->save();

        return response()->json([
            'code'=>'0',
            'info'=>'OK',
            'data'=>$order
        ], 200
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();       
        // Order::truncate();
        return response()->json([
            'message'=>'customer deleted'
        ], 204
        );
    }
}
