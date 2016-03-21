<?php

namespace Cine\Http\Controllers;

use Illuminate\Http\Request;

use Cine\Http\Requests;

class UsuarioController extends Controller
{
    public function create()
    {
        return view('usuario.create');
    }
    public function store(Request $request)
    {
        return "Usuario Registrado";
    }
}
