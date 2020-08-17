<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PagoFacil\Transaction;
use App\PagoFacil\TransaccionesModel;

class MakeTransaction extends Controller
{
    
    private $_transaction;
    private $_transaccionesModel;
    
    public function __construct(Transaction $transaction, TransaccionesModel $transaccionesModel) {
        
        $this->_transaction = $transaction;
        $this->_transaccionesModel = $transaccionesModel;
    }

    public function store(Request $request){
        
        $request->validate([
            'nombre' => 'required',
            'tarjeta_uno' => ['required','size:4'],
            'tarjeta_dos' => ['required','size:4'],
            'tarjeta_tres' => ['required','size:4'],
            'tarjeta_cuatro' => ['required','size:4'],
            'cvt' => ['required','size:3'],
            'cp' => ['required','size:5'],
            'mesExpiracion' => ['required','size:2'],
            'anyoExpiracion' => ['required','size:2'],
            'monto' => 'required',
            'idSucursal' => 'required',
            'idUsuario' => 'required',
            'idServicio' => 'required',
            'email' => ['required', 'email'],
            'telefono' => 'required',
            'calleyNumero' => 'required',
            'colonia' => 'required',
            'municipio' => 'required',
            'estado' => 'required',
            'pais' => 'required',
        ]);
        
        $ws_transaccion = $this->_transaction->make($request->all());

        if($ws_transaccion['WebServices_Transacciones']['transaccion']['status'] == 'success'){
            $this->_transaccionesModel->save($ws_transaccion);
        }

        $transacciones = $this->_transaccionesModel->getList();
        return View('transacciones', array('transacciones' => $transacciones));
        
    }
    
}
