<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{


    public function index() {
        $users = User::where("rol", '=', "werknemer")->get();
        return response([
            'users' => $users
        ]);
    }
    //
}
