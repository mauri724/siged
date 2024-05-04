<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdmonController extends Controller
{
    //

    public function admon()
    {
        return view('admon/admon');
    }
    public function registroUsuario(): View
    {
        $Usuarios = Usuario::latest()->paginate(3);


        //return view('admon/Registrousuarios', ['Usuarios'=>$Usuarios]);
        return view('admon/Registrousuarios', ['Usuarios'=>$Usuarios]);
    }
}
