<?php

namespace App\Http\Controllers;

use App\Models\Logueo;
use Illuminate\Http\Request;

class LogueoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('logueo');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //dd($request->all());
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Logueo $logueo)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logueo $logueo)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Logueo $logueo)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logueo $logueo)
    {
        //
    }
    
}
