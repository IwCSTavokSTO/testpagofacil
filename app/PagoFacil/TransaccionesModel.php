<?php

namespace App\PagoFacil;

use App\Transacciones;

class TransaccionesModel
{
    
    protected $_Transacciones;
    
    public function __construct() {
        
        $this->_Transacciones = new Transacciones;
    }
    
    public function getList(){
        
        return $this->_Transacciones->all();
    }

    public function save($ws_transaccion){
        
        $this->_Transacciones->autorizado = $ws_transaccion['WebServices_Transacciones']['transaccion']["autorizado"];
        $this->_Transacciones->texto = $ws_transaccion['WebServices_Transacciones']['transaccion']["texto"];
        $this->_Transacciones->empresa = $ws_transaccion['WebServices_Transacciones']['transaccion']["empresa"];
        $this->_Transacciones->nombre = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["nombre"];
        $this->_Transacciones->apellidos = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["apellidos"];
        $this->_Transacciones->numeroTarjeta = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["numeroTarjeta"];
        $this->_Transacciones->cvt = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["cvt"];
        $this->_Transacciones->cp = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["cp"];
        $this->_Transacciones->mesExpiracion = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["mesExpiracion"];
        $this->_Transacciones->anyoExpiracion = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["anyoExpiracion"];
        $this->_Transacciones->monto = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["monto"];
        $this->_Transacciones->idSucursal = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["idSucursal"];
        $this->_Transacciones->idUsuario = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["idUsuario"];
        $this->_Transacciones->idServicio = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["idServicio"];
        $this->_Transacciones->email = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["email"];
        $this->_Transacciones->telefono = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["telefono"];
        $this->_Transacciones->celular = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["celular"];
        $this->_Transacciones->calleyNumero = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["calleyNumero"];
        $this->_Transacciones->colonia = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["colonia"];
        $this->_Transacciones->municipio = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["municipio"];
        $this->_Transacciones->estado = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["estado"];
        $this->_Transacciones->pais = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["pais"];
        $this->_Transacciones->idPedido = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["idPedido"];
        $this->_Transacciones->ip = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["ip"];
        $this->_Transacciones->transFechaHora = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["transFechaHora"];
        $this->_Transacciones->bin = $ws_transaccion['WebServices_Transacciones']['transaccion']["data"]["bin"];
        $this->_Transacciones->pf_message = $ws_transaccion['WebServices_Transacciones']['transaccion']["pf_message"];
        $this->_Transacciones->status = $ws_transaccion['WebServices_Transacciones']['transaccion']["status"];
        
        $this->_Transacciones->save();
        
        
    }
}
