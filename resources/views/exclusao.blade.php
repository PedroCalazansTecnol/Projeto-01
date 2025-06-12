<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exluir pagina</title>
</head>
<body>
    <form action="{{route('delete')}}" method="get">
      
        <input type="text" name="id" id="">
        <input type="submit" value="Excluir">

    </form>

</body>
</html>