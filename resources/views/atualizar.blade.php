@extends('layouts.template')
@vite(['resources/js/app.js'])

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar dados</title>
</head>
<body>

@section('content')
    <form action="{{route('confirm.att')}}" method="get">
          <label for="nome">Id :</label>
        <input type="text" name="id" id="">
        <br><br>
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <br><br>
        <label for="nome">E-mail :</label>
        <input type="text" name="email" id="email">
        <br><br>
          <button type="submit" style="border-radius:4px;" id ="btn" disabled>
        Enviar dados
        </button>      
    </form>

@endsection
</body>
</html>


