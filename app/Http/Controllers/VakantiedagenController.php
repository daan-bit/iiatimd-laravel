<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vakantiedagen;


class VakantiedagenController extends Controller
{

    public function index() {
        $vakantiedagen = Vakantiedagen::all();
        return response([
            'vakantiedagen' => $vakantiedagen
        ]);
    }

    public function store(Request $request) {
        return Vakantiedagen::create([
            'user_id' => $request->input('user_id'),
            'vakantie_van' => $request->input('vakantie_van'),
            'vakantie_tot' => $request->input('vakantie_tot'),
            'inLaravelDB' => 1
        ]);
    }

    //
}
