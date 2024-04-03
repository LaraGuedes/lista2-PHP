<?php
    require "funcoesEquacao.php";
    
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    
    $msgErro = validarCampos($a, $b, $c);
    $equacao = calcularEquacao($a, $b, $c);
    $delta = delta($a, $b, $c);
    $concavidade = concavidade($a, $b, $c);

    $msg = "Coeficientes: $a, $b, $c <br> Delta: $delta <br> Solução: $equacao <br> Concavidade: $concavidade";
    if ( empty($msgErro) ) {
        header("Location:formulario.php?msg=$msg");

    } else {
        header("Location:formulario.php?msg=$msgErro");
    }
?>