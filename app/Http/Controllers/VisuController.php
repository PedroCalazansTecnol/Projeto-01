<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class VisuController extends Controller
{
    public function lista(){

    
        // Realiza a busca no banco de dados, e coloca 10 objetos por pagina
        $usuarios = User::orderByDesc('id')->paginate(10);

        
        return view('listaDados',['usuarios'=> $usuarios] );


    }
}
