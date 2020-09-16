<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){


        $request->validate([
            'email'=> 'required',
            'password'=>'required'
        ]);

        $login = request(['email','password']);

        if( !Auth::attempt( $login )){
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }
        $user = User::find(1);

        $accessToken = $user->createToken('authToken')->accessToken;

        return response(['user'=> $user,'authToken'=>$accessToken]);

    }
}
