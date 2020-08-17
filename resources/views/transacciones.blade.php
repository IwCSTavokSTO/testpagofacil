<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Your Website</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/formulario.js"></script>
        <link rel="stylesheet" type="text/css" href="css/frontend.css">
        
</head>

<body>
    
    <div class="container">
        <div class="row">
            <div class="alert alert-primary col-xs-12 col-lg-12" role="alert">
              Se agregó un nuevo registro a la tabla Transacciones
            </div>
            <div class="alert alert-success col-xs-12 col-lg-12" role="alert">
              Listado de todos los registros guardados
            </div>
            <div class="alert alert-success col-xs-12 col-lg-12" role="alert">
              Regresar a la página inicial <a class="btn btn-primary" href="/pagofacil/public/" role="button">Regresar</a>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <ul class="list-group">
                @foreach ($transacciones as $transaccion)
                    <li class="list-group-item">
                        {{ $transaccion->id }} <br>
                        {{ $transaccion->empresa }} <br>
                        {{ $transaccion->nombre }} <br>
                        {{ $transaccion->apellidos }} <br>
                        {{ $transaccion->texto }} <br>
                        {{ $transaccion->status }} <br>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    
</body>
</html>