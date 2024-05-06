<?php

namespace App\Http\Controllers;

use App\Models\Perfiles;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PerfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //
        $perfiles = Perfiles::latest()->paginate(5);
        return view('Perfil', ['perfilr' => $perfiles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        //
        return view('admon.createPerfil');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
        //dd($request);
        $request->validate([
            'nom_perfil' => 'required'
        ]);

        Perfiles::create($request->all());
        return redirect()->route('perfiles.index') ->with('success', 'Nuevo perfil creado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Perfiles $perfiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perfiles $perfil)//: View
    {
        //
        dd($perfil);
        //return $perfil;
        //return view('admon.editPerfil',['perfil' => $perfil]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  Perfiles $perfil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perfiles $perfiles)
    {
        //
    }
}
