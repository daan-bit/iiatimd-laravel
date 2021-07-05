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
            'password' => Hash::make($request->input('password')),
            'rol' => $request->input('rol'),
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
            'message' => "U bent ingelogd!",
            'token'=> $token,
            'rol' => $user->rol,
            'user_id' => $user->id,
            'naam' => $user->name,
            'email' => $user->email 
        ], 200)->withCookie($cookie);
    }

    public function user(){
        $user = Auth::user();
        if ($user != null) {
        return response([
            'user' => $user
        ]);
        if ($user == null) {
        return response([
                'message' => 'U bent niet ingelogd!'
            ], 401); 
    }
    }
    }

    public function logout(){
        $cookie = Cookie::forget('jwt');

        return response([
            'message' => 'OK'
        ], 200)->withCookie($cookie);
    }
}
