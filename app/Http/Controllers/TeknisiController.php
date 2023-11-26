<?php

namespace App\Http\Controllers;

use App\Models\Teknisi;
use Illuminate\Http\Request;

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



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
