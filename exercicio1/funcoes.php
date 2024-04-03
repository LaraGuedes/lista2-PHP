<?php
    function validarCampos($altura, $peso) {
        $msgErro = "";
        if ( empty($altura) ) {
            $msgErro = $msgErro . "<FONT color=blue> Informe a altura.<br></FONT>";        
        }        
        
        if ( empty($peso) ) {
            $msgErro = $msgErro . "<FONT color=blue> Informe o peso.<br></FONT>";
        } 
        return $msgErro;
    }
    
    function verificarIMC($peso, $altura){
        $msgErro = validarCampos($altura, $peso);

        if (!empty($msgErro)) {
            echo $msgErro;
        } 
        else {
            $imc = $peso / ($altura * $altura);
            $resultadoIMC = "";
            if ($imc< 18.5) {
                $resultadoIMC = $resultadoIMC . "<FONT color=blue>Abaixo do peso.</FONT>";
            }
            elseif ($imc >= 18.5 && $imc < 25.0) {
                $resultadoIMC = $resultadoIMC . "<FONT color=green>Peso Normal.</FONT>";
            }
            elseif ($imc >= 25.0 && $imc < 30.0) {
                $resultadoIMC = $resultadoIMC . "<FONT color=yellow>Sobrepeso.</FONT>";
            }
            elseif ($imc >= 30.0 && $imc < 35.0) {
                $resultadoIMC = $resultadoIMC . "<FONT color=orange>Obeso Leve.</FONT>";
            }
            elseif ($imc >= 35.0 && $imc < 40.0) {
                $resultadoIMC = $resultadoIMC . "<FONT color=purple>Obeso Moderado.</FONT>";
            }
            else {
                $resultadoIMC = $resultadoIMC . "<FONT color=red>Obeso Morbido.</FONT>";
            }
            return $resultadoIMC;
        }
    }
?>


