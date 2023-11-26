<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CredentialController extends Controller
{
    public function login(Request $request){
        $user = User::where('name', $request->username)->first();
        // $request->username;
        
        if($user){
            // $request->password;
            if (Hash::check($request->password, $user->password)) {
                return response()->json([
                    "code"=>"0",
                    "info"=>"OK",
                    "data"=>[
                        "id"=>$user->id,
                        "username"=>$user->name,
                        "isAdmin"=>TRUE
                    ]
                ]
                , 200);
            }else{
                return response()->json([
                    "code"=>"1",
                    "info"=>"Password Salah",
                ]
                , 404);
            }

        }else{
            return response()->json([
                "code"=>"1",
                "info"=>"User tidak ditemukan!",
            ], 404);
        }
    }
}
