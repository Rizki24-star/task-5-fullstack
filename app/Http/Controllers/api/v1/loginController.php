<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function login(Request $request){
        
       $login =  $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        if(Auth::attempt($login)){
            $accessToken = Auth::user()->createToken('authToken')->accessToken;

            return response(['user' => Auth::user(), 'access_token' => $accessToken]);
        }else{
            return response(['message' => 'Invalid Login Credentials']);
        }

       

        
    }
}
