<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Werktijd;

class WerktijdenController extends Controller
{
    //
    public function index() {
        $alle_werktijden = Werktijd::all();
        return response([
            'response' => $alle_werktijden
        ]);
    }

    public function show($id) {
        $werktijden = Werktijd::find($id);
        return response([
            'response' => $werktijden
        ]);
    }

    public function gebruikerWerktijden($id) {
        $werktijden = Werktijd::where('user_id','=',$id)->get();
        return response([
            'response' => $werktijden
        ]);
    }

}