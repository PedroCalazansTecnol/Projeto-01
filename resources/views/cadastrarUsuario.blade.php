@extends('layouts.template')

@vite(['resources/js/app.js'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de usuario</title>

</head>
<body>

@section('content')

       <form action="{{route('msg')}}" method="get" id="form">
        
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
        <button type="submit" style="border-radius:4px;" id ="btn" disabled>
        Enviar dados
        </button>      
    </form>
    <br>
@endsection

</body>
</html>