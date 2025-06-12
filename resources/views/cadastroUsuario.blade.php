@extends('layouts.template')


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuario</title>
</head>
<body>

@section('content')


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
         
        <input style="border-radius:4px;" type="submit" value="Enviar dados">
    </form>
    <br>
<button onclick="window.location.href='@php echo route('dados.banco'); @endphp'">Ver dados</button>
<br><br>
<button onclick="window.location.href='@php echo route('att.dados'); @endphp'">Editar dados</button>
<br><br>
<button onclick="window.location.href='@php echo route('excluir'); @endphp'">Excluir dados</button>
    
@endsection

</body>
</html>

