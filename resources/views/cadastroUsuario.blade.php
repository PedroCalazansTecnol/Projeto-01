@extends('layout')

@section('content')


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuario</title>
</head>
<body>
    <h1>Cadastro de usuario</h1>
    <form action="{{route('form.ver')}}" method="get">
        @csrf
        <label for="nome">Nome :</label>
        <input type="text" name="nome" id="nome">
        <br><br>
         <label for="email">E-mail:</label>
        <input type="text" name="email" id="email">
         <br><br>
        <label for="senha">Senha :</label>
        <input type="password" name="senha" id="senha">
         <br><br>
         
        <input type="submit" value="Enviar dados">
    </form>
    <br>
    <a href="{{route('dados.banco')}}">Ver dados</a>
    <br><br>
    <a href="{{route('att.dados')}}">Editar dados</a>
    <br><br>
    <a href="{{route('excluir')}}">Excluir dados</a>
</body>
</html>

@endsection