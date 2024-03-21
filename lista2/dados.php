<?php
    require "funcoes.php"

    $peso = $_POST["txtpeso"];
    $altura = $_POST["txtaltura"];

    $msgErro = validarCampos($peso, $altura);
    if ( empty($msgErro) ) {

    }
    else{
        
    }
?>