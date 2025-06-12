<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UseController extends Controller
{


  
    public function lista(){

  
        // Realiza a busca no banco de dados, e coloca 10 objetos por pagina
        $usuarios = User::orderByDesc('id')->paginate(10);

        
        return view('listaDados',['usuarios'=> $usuarios] );


    }




  public  function index(){
        return view('cadastroUsuario');
  }


  public function confirm(Request $request){
    $id = $request -> input('id');
    $user = User::find($id);
    
    //autalização por dado
    $user->name = $request ->input('nome');
    $user->email = $request ->input('email');
    $user->save();

  

    return view('mensagem');
  }


  public function att(Request $request){
    return view('atualizar');
  }


  public function visu(Request $request){
  
    $nome = $request->input('nome');
    $email = $request->input('email');
    $senha = $request->input('senha');


      User::create([
        'name'=> $nome,
        'password'=>$senha,
        'email'=>$email,
      ]);


    return view('Visualizar'); 
  
  }

  public function exc(){


    return view('exclusao');
  }

public function delete(Request $request){
$id = $request ->input('id');
$user = User::find($id);

$user->delete();

return view('mensagem');

}

}
