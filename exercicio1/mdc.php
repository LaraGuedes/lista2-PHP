<?php
    require "funcoes.php";

    $altura = $_POST["altura"];
    $peso = $_POST["peso"];
    
    $msgErro = validarCampos($altura, $peso);
    $resultadoIMC = verificarIMC($peso, $altura);
    
    if ( empty($msgErro) ) {
        header("Location:formulario.php?msg=Pelo resultado do IMC você está $resultadoIMC");

    } else {
        header("Location:formulario.php?msg=$msgErro");
    }
?>
