<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\UseController;
use App\Http\Controllers\VisuController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [UseController::class, 'index'])-> name('index');


// PARA PROGRAMAR UMA ROTA PRIMEIRO NOS TEMOS O CAMINHO E LOGO DEPOIS A ROTA EM SI
//PASSAMOS COMO PAREMETRO O CAMINHO E A CONTROLLER QUE VAI DIRECIONAR A VIEW PARA ROTA
//O NAME EU CONSIGO REDIRECIONAR PARA A ROTA DE DO PROPRIO HHTML =>  " <a href="{{route('user.create')}}">Cadastrar</a> "


//VISUALIZAÇÃO DE DADOS DO BANCO
Route::get('/visualizar',[UseController::class,'lista'])->name('dados.banco')->middleware('auth');

//PAGINA DE SUCESSO PARA QUALQUER PROCESSO REALIZADO
Route::get('form/atualizar/conclusao',[UseController::class,'visu'])->name('msg')->middleware('auth');

//DIRECIONAMENTO PARA PAGINA DE EXCLUSÃO
Route::get('form/exclusao',[UseController::class,'exc'])->name('excluir')->middleware('auth');

//EXECUÇÃO DA EXCLUSÃO DE UM USUARIO VIA ID
Route::get('/form/exclusao/delete',[UseController::class,'delete'])->name('delete')->middleware('auth');

//DIRECIONAMENTO PARA PAGINA DE REGISTRO DE USUSARIO
Route::get('/form/cadastro',[UseController::class,'cad'])->name('cad.user')->middleware('auth');

//DIRECIONAMENTO PARA A PAGINA DE ATUALIZAÇÃO DE DADOS
Route::get('form/atualizar/',[UseController::class,'att'])->name('att.dados')->middleware('auth');

//ROTA PARA ATUALIZAÇÃO DE DADOS
Route::get('/atualizar',[UseController::class,'confirm'])->name('confirm.att')->middleware('auth');

//ROTA DE VERIFICAÇÃO DE UM OBJETO DENTRO DO BANCO DE DADOS
Route::get('verificar',[UseController::class,'verificar'])->name('verificar')->middleware('auth');
// ROTA Q VERIFICA UM OBJETO DENTRO DO BANCO DE DADOS

Route::get('verificar/resultado',[UseController::class,'check'])->name('verificar.check')->middleware('auth');

//ROTA DE TESTE PARA RETORNAR UM JSON

/*Route::get('/users',function(){
     return response()->json(User::all());
});*/

//ROTA DE AUTENTICAÇÃO

Route::POST('/autenticar',[UseController::class,'logar'])->name('autenticar');

Route::get('/CRUD',[UseController::class,'crud'])->middleware('auth')->name('home')->middleware('auth');

Route::get('/login',function(){
     $msg ="dados incorretos";

     return view('login',compact('msg'));
})->name('login');