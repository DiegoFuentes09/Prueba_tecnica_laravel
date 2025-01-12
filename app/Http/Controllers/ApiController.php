<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getData()
    {
        $usuarios = Usuario::paginate(10); // Obtiene datos paginados de 5 por página
        return view('index', ['usuarios' => $usuarios]); // Pasa la variable a la vista
    }
}


