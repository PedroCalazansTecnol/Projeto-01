<?php

namespace App\Providers;

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UseController;

/*

Os metodos são utilizados para seguir os padrões HTTP


*/



//ROTA PARA API CONSEGUIR TODOS O USUARIO CADASTRADOS DENTRO DO BANCO
Route::get('/users',[UserController::class,'index']);
//RECEBE UM ID E RETORNA O JASON APENAS COM O OBJETO A QUAL ELE ESTÁ VINCULADO
Route::get('/consulta/{id}',[UserController::class,'show']);
//RECEBE UM ID E EXCLUI O OBJETO NO BANCO RETORNANDO UM JSON COM OS DADOS DELE
Route::delete('excluir/{id}',[UserController::class,'destroy']);
//RECEBE UM JSON E UM ID, CONFERE E FAZ A ATUALIZAÇÃO DO OBJETO COM BASE NOS DADOS RECEBIDO
Route::put('/att/{id}',[UserController::class,'update']); 
//METODO PARA CRIAÇÃO DE UM OBJETO NO BANCO
Route::post('/cadastro',[UserController::class,'store']);