<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PagoFacil\Transaction;

class verifyTransaction extends Controller
{
    
    private $_transaction;
    
    public function __construct(Transaction $transaction) {
        
        $this->_transaction = $transaction;;
    }

    public function index(Request $request){
        
        $ws_transaccion = $this->_transaction->verify($request->all());
        $datos_verificados = $ws_transaccion['WebServices_Transacciones']['verificar'];
        return View('verificar', array('datos_verificados' => $datos_verificados));
        
    }
}
