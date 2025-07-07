


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
     
    </style>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">    
</head>

<body>


<div class="container mt-5 w-100">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand" href="{{route('home')}}"><strong>CRUD</strong></a>
        </div>
    </nav>

    <div class="text-center mt-5 me-4">
        @yield('content')
    </div>

    <nav class="navbar navbar-dark bg-dark mt-5">
        <div class="container-fluid justify-content-center h-100">
           
        </div>
    </nav>
</div>




<!-- Bootstrap JS (opcional, para componentes como modal, dropdown etc.) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
  
</html>