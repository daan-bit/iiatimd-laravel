<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class AuthController extends Controller
{

    public function register(Request $request){
        return User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password'))
        ]);
    }

    public function login(Request $request){
        if(!Auth::attempt($request->only('email', 'password'))){
            return response([
                'message' => 'Verkeerde gebruikersnaam of wachtwoord'
            ], 401); 
        }
        
        $user = Auth::user();

        $token = $user->createToken('token')->plainTextToken;

        $cookie = cookie('jwt', $token, 60 * 24); // 1 dag

        return response([
            'message' => "OK" //$token
        ], 200)->withCookie($cookie);
    }

    public function user(){
        return Auth::user();
    }

    public function logout(){
        $cookie = Cookie::forget('jwt');

        return response([
            'message' => 'OK'
        ], 200)->withCookie($cookie);
    }
}
