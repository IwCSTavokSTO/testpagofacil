<?php
namespace App\PagoFacil;

class Transaction {
    
    private $_base_uri = 'https://sandbox.pagofacil.tech';
    
    private $_id_usuario = 'a2bce1f48cf7d11fae7d662d8bf7513355adf96f';
    
    private $id_sucursal = '560d73f2a001c6d40dd805ab9ccafdeabf37cec3';

    protected $_makeMethod = 'transaccion';
    
    protected $_verifyMethod = 'verificar';

    public function verify($user_data){
        
        $data = array('method'=> $this->_verifyMethod,
                'data[idPedido]'=> $user_data['idPedido'],
                'data[idUsuario]'=> $this->_id_usuario,
                'data[idSucursal]'=> $this->id_sucursal);
        
        $url = $this->_base_uri.'/Wsrtransaccion/index/format/json?';

        $ch = curl_init($url);

        curl_setopt($ch,    CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch,    CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $ws_result = curl_exec($ch);
        curl_close($ch);
        
        return json_decode($ws_result, true);
    }

    public function make($user_data){

        $numero_tarjeta = $user_data['tarjeta_uno'].' '.$user_data['tarjeta_dos'].' '.$user_data['tarjeta_tres'].' '.$user_data['tarjeta_cuatro'];
        
        $data = array("method"=>  $this->_makeMethod,
            'data'=>array(
		'nombre'=> $user_data['nombre'],
		'apellidos'=> $user_data['apellidos'],
		'numeroTarjeta'=> $numero_tarjeta,
		'cvt'=> $user_data['cvt'],
		'cp'=> $user_data['cp'],
		'mesExpiracion'=> $user_data['mesExpiracion'],
		'anyoExpiracion'=> $user_data['anyoExpiracion'],
		'monto'=> $user_data['monto'],
		'idSucursal'=> $this->id_sucursal,
		'idUsuario'=> $this->_id_usuario,
		'idServicio'=> $user_data['idServicio'],
		'email'=> $user_data['email'],
		'telefono'=> $user_data['telefono'],
		'celular'=> $user_data['celular'],
		'calleyNumero'=> $user_data['calleyNumero'],
		'colonia'=> $user_data['colonia'],
		'municipio'=> $user_data['municipio'],
		'estado'=>$user_data['estado'],
		'pais'=> $user_data['pais'],
		'idPedido'=> $user_data['idPedido'],
		'param1'=> '',
		'param2'=> '',
		'param3'=> '',
		'param4'=> '',
		'param5'=> '',
		'httpUserAgent'=>'Mozilla/5.0 (X11; Fedora; Linux x86_64; rv:50.0) Gecko/20100101 Firefox/50.0',
		'ip'=>'1.1.1.1'
            )
        );
        
        $url = $this->_base_uri.'/Wsrtransaccion/index/format/json?';

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $ws_result = curl_exec($ch);
        curl_close($ch);
        
        return json_decode($ws_result, true);
    }
}