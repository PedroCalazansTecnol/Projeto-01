@extends('layouts.template')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verificar</title>
</head>
<body>
    <form action="{{route('verificar.check')}}" method="get">
        <input type="text" placeholder="nome do usuario" name="nome">
        <input type="submit" value="verificar">

    </form>
</body>
</html>



@endsection