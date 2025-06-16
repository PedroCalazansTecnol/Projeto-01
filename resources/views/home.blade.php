@extends('layouts.template')



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuario</title>
   
    <style>
        button{
 
        width: 200px;
        padding: 10px;
        font-size: 14px;
        }
    </style>

</head>
<body>

@section('content')


 <button onclick="window.location.href='@php echo route('cad.user'); @endphp'">Cadastrar usuario</button>
 <br><br>   
<button onclick="window.location.href='@php echo route('dados.banco'); @endphp'">Ver usuarios cadastrados</button>
<br><br>
<button onclick="window.location.href='@php echo route('att.dados'); @endphp'">Editar dados de usuario</button>
<br><br>
<button onclick="window.location.href='@php echo route('excluir'); @endphp'">Excluir dados de usuario</button>
<br><br>
<button onclick="window.location.href='@php echo route('verificar'); @endphp'">Verificar</button>
    
@endsection

</body>
</html>

