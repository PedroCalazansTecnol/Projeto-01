<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UseController extends Controller
{

public function crud()
{
    return view('home'); // Sua página protegida com conteúdo do CRUD
}
 

public function logar(Request $request){
$email = trim($request->input('email'));
$senha = $request->input('senha');
$msg ='Dados incorretos4rr4';


//
$user = User::where('email',$email,)->first();





if($user && Hash::check($senha,$user->password)){
    Auth::login($user);
 //   dd(Auth::check());
    return redirect()->route('home');
}
return view ('mensagem',compact('msg'));


}








   public function check(Request $request){

      //REMOVE TODOS OS ESPAÇOS DA STRING    
        $nome = trim($request['nome']);

        //VERIFICA SE A STRING PERTECE AO CAMPO 'NOME DENTRO DO BANCO'
        $teste = User::whereRaw('LOWER(name) = ?', [strtolower($nome)])->exists();

      if($teste){
        $msg ='O usuario ' . $nome . ' está cadastrado no banco'; 
        return view('mensagem',compact('msg'));
      }
      else{
        $msg = 'O usuario '.$nome . 'não está cadastrado no banco';
        return view('mensagem',compact('msg'));
      }

  }

  public function verificar(){
    return view('verificar');

  }

      
        public function lista(){

      
            // Realiza a busca no banco de dados, e coloca 11 objetos por pagina
            $usuarios = User::orderByDesc('id')->paginate(11);

            
            return view('listaDados',['usuarios'=> $usuarios] );
    }

  public  function index(){
    $msg ='';
        return view('login',compact('msg'));
  }


  public function confirm(Request $request){

      //RECEBE O ID
      $id = $request -> input('id');
      //CRIA UM OBJETO COM BASE NO OBJETO DO BANCO PELO ID
      $user = User::find($id);
      
      //ATUALIZA OS DADOS DO OBJETO CRIADO COM BASE NO QUE FOI INFORMADO NO INPUT
      $user->name = $request ->input('nome');
      $user->email = $request ->input('email');
      //SALVA OS DADOS DO OBJETO LIGANDO ELE AO BANCO
      $user->save();

    
    $msg = "dados do usuario com o id ". $id . " foram atualizados com sucesso"; 

      return view('mensagem',compact('msg'));
  }


  public function att(Request $request){
    return view('atualizar');
  }

  //CADASTRO DE USUARIO
  public function visu(Request $request){
  
    $nome = $request->input('nome');
    $email = $request->input('email');
    $senha = $request->input('senha');


      User::create([
        'name'=> $nome,
        'password'=>$senha,
        'email'=>$email,
      ]);

      $msg ="Usuario Cadastrado com sucesso";

    return view('mensagem',compact('msg')); 
  
  }

  public function exc(){


    return view('exclusao');
  }

//EXCLUSÃO DO USUARIO PELO ID INFORMADO
    public function delete(Request $request){
    $id = $request ->input('id');
    $user = User::find($id);

    $user->delete();

    // 1 para exclusao dois para edit

    $msg = "O usuario com id " . $id . "  foi deletado com sucesso";

    return view('mensagem',compact('msg'));

}


public function cad(){

  return view('cadastrarUsuario');

}

 

}
