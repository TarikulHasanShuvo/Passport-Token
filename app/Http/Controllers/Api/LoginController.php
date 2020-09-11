<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){

        $login = $request->validate([
            'email'=> 'required',
            'password'=>'required'
        ]);

      /*  if(Auth::attempt($login)){

        }*/

    }
}
