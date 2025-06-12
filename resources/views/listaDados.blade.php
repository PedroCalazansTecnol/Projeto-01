@extends('layouts.template')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Cadastrados no banco</title>
</head>
<body>

@section('content')

    <h1>Banco de dados atual</h1>
      <h2>
    @forelse ($usuarios as $usuario)
        <p>{{ $usuario->name }}</p>
    @empty
        <p>Sem usuários cadastrados</p>
    @endforelse
</h2>


@endsection




</body>
</html>