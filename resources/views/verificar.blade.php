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
              El resultado de verificar la transferencia es:
            </div>
            <div class="alert alert-success col-xs-12 col-lg-12" role="alert">
              Regresar a la página inicial <a class="btn btn-primary" href="/pagofacil/public/" role="button">Regresar</a>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <ul class="list-group">
                <li class="list-group-item">Autorizado: {{ $datos_verificados['autorizado'] }}</li>
                <li class="list-group-item">Autorizacion: {{ $datos_verificados['autorizacion'] }}</li>
                <li class="list-group-item">Transaccion: {{ $datos_verificados['transaccion'] }}</li>
                <li class="list-group-item">Texto: {{ $datos_verificados['texto'] }}</li>
                <li class="list-group-item">TipoTC: {{ $datos_verificados['TipoTC'] }}</li>
                <li class="list-group-item">Nombre: {{ $datos_verificados['dataVal']['nombre'] }}</li>
                <li class="list-group-item">CP: {{ $datos_verificados['dataVal']['cp'] }}</li>
                <li class="list-group-item">Monto: {{ $datos_verificados['dataVal']['monto'] }}</li>
                <li class="list-group-item">Pedido: {{ $datos_verificados['dataVal']['idPedido'] }}</li>
                <li class="list-group-item">Tipo de Tarjeta: {{ $datos_verificados['dataVal']['tipoTarjeta'] }}</li>
                <li class="list-group-item">Email: {{ $datos_verificados['dataVal']['email'] }}</li>
                <li class="list-group-item">Status: {{ $datos_verificados['status'] }}</li>
            </ul>
        </div>
    </div>
    
</body>
</html>