
$(document).ready(function(){
    pagofacil.init();
});
var pagofacil = (function(){
    'use strict';
    
    var obj = {};
    
    var init = function(){
        
        /* Eventos para aceptar sólo números en estos campos */
        $("#tarjeta_uno").keydown(onlynumbers);
        $("#tarjeta_dos").keydown(onlynumbers);
        $("#tarjeta_tres").keydown(onlynumbers);
        $("#tarjeta_cuatro").keydown(onlynumbers);
        $("#cvt").keydown(onlynumbers);
        $("#cp").keydown(onlynumbers);
        $("#mesExpiracion").keydown(onlynumbers);
        $("#anyoExpiracion").keydown(onlynumbers);
        $("#idUsuario").keydown(onlynumbers);
        $("#idSucursal").keydown(onlynumbers);
        $("#monto").keydown(onlynumbers);
        
        /* Eventos para manejar el click en el botón */
        $("#submit-button").click(processForm);
    
    }
    
    var processForm = function(event){
        
        event.preventDefault();
        var checkFields = validateFields();
        
        if(checkFields){
            $('#trn-form').submit();
        } else {
            return false;
        }
    }
    
    var validateFields = function(){
        
        var validate = true;
        var fieldList = ['nombre', 'apellidos', 'cvt', 'cp', 'mesExpiracion', 'anyoExpiracion', 
                        'monto', 'email', 'celular', 'calleyNumero', 'colonia', 'municipio'];
        
        fieldList.forEach(function(field){
            
            var fieldVal = $('#'+field).val();
            
            if(fieldVal == ''){
                validate = false;
                $('#'+field).focus();
                alert('El campo: '+field+' No debe estar vacio');
                return false;
            }
        });
        
        return validate;
    }
    
    var onlynumbers = function(event){
        
        if((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105) && event.keyCode !==190  && event.keyCode !==110 && event.keyCode !==8 && event.keyCode !==9  ){
            return false;
        }
    }
    
    /* Public functions */
    obj = {
        init: init
    };
    
    return obj;
})();
