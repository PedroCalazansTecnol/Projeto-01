@extends('layouts.template')

@section('content')

<form action="{{route('autenticar')}}" method="POST" >
@csrf
<p>{{$msg}}</p>
<label for="email">E-mail : </label>
<input type="text" name="email">
<br><br>
<label for="senha">Senha : </label>
<input type="password" name="senha">
<br><br>
<input type="submit" value="login">


</form>


@endsection