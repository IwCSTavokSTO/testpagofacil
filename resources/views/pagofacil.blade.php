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
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            
            <div class="col">
                
                <div class="container">
                    <div class="row">
                        <div class="alert alert-primary col-xs-12 col-lg-12" role="alert">
                          Formulario para Realizar una Transacción a Pago Fácil:
                        </div>
                    </div>
                </div>
                
                <form id="trn-form" method="POST" action="{{ route('transaction') }}">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                    <div class="form-group">
                        <p>Formulario para Realizar una Transacci&oacute;n a Pago F&aacute;cil:</p>
                    </div>
                    <div class="form-group">
                      <label for="nombre">Nombre:</label>
                      <input class="form-control" placeholder="Nombre" id="nombre" name="nombre" value="Jon">
                    </div>
                    <div class="form-group">
                      <label for="apellidos">Apellidos:</label>
                      <input class="form-control" placeholder="Apellidos" id="apellidos" name="apellidos" value="Snow">
                    </div>
                    <div class="form-group">
                      <label for="numeroTarjeta">numeroTarjeta:</label>
                      <input type="text" id="tarjeta_uno" name="tarjeta_uno" size="4" maxlength="4" value="5513">
                      <input type="text" id="tarjeta_dos" name="tarjeta_dos" size="4" maxlength="4" value="5509">
                      <input type="text" id="tarjeta_tres" name="tarjeta_tres" size="4" maxlength="4" value="9409">
                      <input type="text" id="tarjeta_cuatro" name="tarjeta_cuatro" size="4" maxlength="4" value="2123">
                    </div>
                    <div class="form-group">
                      <label for="cvt">CVT:</label>
                      <input type="text" class="form-control" id="cvt" name="cvt" size="4" maxlength="4" value="271">
                    </div>
                    <div class="form-group">
                      <label for="cp">Código Postal:</label>
                      <input type="text" class="form-control" placeholder="Código Postal" id="cp" name="cp" size="5" maxlength="5" value="48219">
                    </div>
                    <div class="form-group">
                      <div for="mesExpiracion">Fecha de Expiración:</div>
                      <label for="mesExpiracion">Mes:</label>
                      <input type="text" id="mesExpiracion" name="mesExpiracion" size="2" maxlength="2" value="08">
                      <label for="anyoExpiracion">Año:</label>
                      <input type="text" id="anyoExpiracion" name="anyoExpiracion" size="4" maxlength="4" value="22">
                    </div>
                    <div class="form-group">
                      <label for="monto">Monto:</label>
                      <input type="text" class="form-control" placeholder="Monto" id="monto" name="monto" value="23456.78">
                    </div>
                    <div class="form-group">
                      <label for="idSucursal">Sucursal:</label>
                      <input type="text" class="form-control" placeholder="Sucursal" id="idSucursal" name="idSucursal" value="e147ee31531d815e2308d6d6d39929ab599deb98">
                    </div>
                    <div class="form-group">
                      <label for="idUsuario">ID de Empresa:</label>
                      <input type="text" class="form-control" placeholder="ID de Empresa" id="idUsuario" name="idUsuario" value="f541b3f11f0f9b3fb33499684f22f6d711f2af58">
                    </div>
                    <div class="form-group">
                        <label for="idServicio">Servicio PagoFácil:</label>
                        <select class="custom-select custom-select-sm" id="idServicio" name="idServicio">
                          <option selected>Servicio PagoFácil</option>
                          <option value="1">WebForm</option>
                          <option value="3" selected="selected">ThirdParty (ssl)</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" placeholder="Email" id="email" name="email" value="pruebas@pagofacil.net">
                    </div>
                    <div class="form-group">
                      <label for="telefono">Teléfono:</label>
                      <input type="text" class="form-control" placeholder="Teléfono" id="telefono" name="telefono" value="5544443333">
                    </div>
                    <div class="form-group">
                      <label for="celular">Celular:</label>
                      <input type="text" class="form-control" placeholder="Celular" id="celular" name="celular" value="5588889999">
                    </div>
                    <div class="form-group">
                      <label for="calleyNumero">Calle y número:</label>
                      <input type="text" class="form-control" placeholder="" id="calleyNumero" name="calleyNumero" value="Calle No 7">
                    </div>
                    <div class="form-group">
                      <label for="colonia">Colonia:</label>
                      <input type="text" class="form-control" placeholder="" id="colonia" name="colonia" value="Mi colonia">
                    </div>
                    <div class="form-group">
                      <label for="municipio">Municipio:</label>
                      <input type="text" class="form-control" placeholder="" id="municipio" name="municipio" value="Mi Mun">
                    </div>
                    <div class="form-group">
                      <label for="estado">Estado:</label>
                      <input type="text" class="form-control" placeholder="" id="estado" name="estado" value="Mi estado">
                    </div>
                    <div class="form-group">
                      <label for="pais">Pais:</label>
                      <input type="text" class="form-control" placeholder="" id="pais" name="pais" value="México">
                    </div>
                    <div class="form-group">
                      <label for="idPedido">ID de pedido:</label>
                      <input type="text" class="form-control" placeholder="ID de pedido" id="idPedido" name="idPedido" value="4567">
                    </div>

                    <button class="btn btn-primary" id="submit-button">Realizar transacción</button>
                </form>
            </div>

            <div class="col">
                <div class="container">
                    <div class="row">
                        <div class="alert alert-primary col-xs-12 col-lg-12" role="alert">
                          Formulario para Verificar una Transacción a Pago Fácil:
                        </div>
                    </div>
                </div>
                
                <form id="vrf-form" method="POST" action="{{ route('verify') }}">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                    <div class="form-group">
                        <p>Formulario para Realizar una Transacci&oacute;n a Pago F&aacute;cil:</p>
                    </div>
                    <div class="form-group">
                      <label for="idPedido">Pedido:</label>
                      <input class="form-control" placeholder="Pedido" id="idPedido" name="idPedido" value="TEST_TX">
                    </div>

                    <button class="btn btn-primary" id="submit-button">Realizar transacción</button>
                </form>                
            </div>
            
        </div>
    </div>
    
</body>

</html>