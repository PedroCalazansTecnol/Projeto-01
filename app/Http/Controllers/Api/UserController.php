<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Cache\Events\RetrievingKey;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    
    public function index()
    {
        //Retorno do Json com todos os arquivos
          return response()->json(User::all());

    }
   
    public function store(Request $request)
    {

        try{
        $nome = $request->input('name');
        $email = $request->input('email');
        $senha = $request->input('senha');

        User::create([
            'name' => $nome,
            'email'=>$email,
            'password'=>bcrypt($senha),
        ]);

        $user = User::where('name',$nome)->first();


        return response ()->json($user);

        }
        catch(Exception $e){
             Log::error($e); 
            return response()->json([
            'V1' => $request->input('name'),
            'V2'=>$request->input('email'),
            'message' => 'Erro interno no servidor',
            'erro' => $e->getMessage()
        ], 500);

        }
        
    }

  
    public function show($id)
    {
      
        return response ()-> json(User::find($id));
    }

    
    public function update(Request $request,$id)
    {
        

       try {
        //VINCULA O ID AO USUARIO NO BANCO
        $user = User::find($id);
        // TESTA PARA VER SE O USUARIO EXISTE
        if (!$user) {
            return response()->json(['message' => 'Item não encontrado'], 404);
        }
        //VALIDA O JSON
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email'
        ]);

        //VINCULA OS DADOS QUE CHEGARAM VIA JSON DO FORMULARIO E VINCULA ELES AO OBJETO DO BANCO
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return response()->json($user);

    } catch (\Throwable $e) {
        Log::error($e); 
        return response()->json([
            'V1' => $request->input('name'),
            'V2'=>$request->input('email'),
            'message' => 'Erro interno no servidor',
            'erro' => $e->getMessage()
        ], 500);
    }
    

    }

   
    public function destroy($id)
    {
        $user = User::find($id);
         $resp =  response()->json(User::find($id));
        $user->delete();

       return $resp;
    }
}
