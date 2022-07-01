<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Validator;

class registerController extends Controller
{
    public function register(Request $request){

        $validasi = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:8',
        ]);

  
        if ($validasi->fails()) {

            $val = $validasi->errors()->all();
            return response()->json([$val], 400);

        }else{

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);
    
            $token = $user->createToken('authToken')->accessToken;
    
            return response()->json(['user' => $user, 'token' => $token], 200);
        }   

        return response()->json(["Registrasi gagal"],400);
    }
}
