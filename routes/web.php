<?php

use App\Http\Controllers\UseController;
use App\Http\Controllers\VisuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {


    return view('welcome');
})-> name('index');


// PARA PROGRAMAR UMA ROTA PRIMEIRO NOS TEMOS O CAMINHO E LOGO DEPOIS A ROTA EM SI
//PASSAMOS COMO PAREMETRO O CAMINHO E A CONTROLLER QUE VAI DIRECIONAR A VIEW PARA ROTA
//O NAME EU CONSIGO REDIRECIONAR PARA A ROTA DE DO PROPRIO HHTML =>  " <a href="{{route('user.create')}}">Cadastrar</a> "

Route::get('/form', [UseController::class, 'index'])->name('form.index');

Route::get('/form/registro',[UseController::class,'visu'])->name('form.ver');

Route::get('/visualizar',[VisuController::class,'lista'])->name('dados.banco');

Route::get('form/atualizar/',[UseController::class,'att'])->name('att.dados');

Route::get('form/atualizar/conclusao',[UseController::class,'confirm'])->name('msg');

Route::get('form/exclusao',[UseController::class,'exc'])->name('excluir');

Route::get('/form/exclusao/delete',[UseController::class,'delete'])->name('delete');