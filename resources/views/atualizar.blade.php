@extends('layouts.template')

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
        <input type="submit" value="atualizar">
    </form>

@endsection
</body>
</html>


