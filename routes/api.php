<?php

namespace App\Providers;

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UseController;



//ROTA PARA API CONSEGUIR TODOS O USUARIO CADASTRADOS DENTRO DO BANCO
Route::get('/users',[UserController::class,'index']);
Route::get('');
