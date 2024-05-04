<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loguiarController extends Controller
{
    //
    public function loguiar(Request $request)
    {
        //Request $request
        ///dd($request->all());
        //return "hola a todos";
        return view('index');
    }
    public function index()
    {
        return view('index');
    }


}
