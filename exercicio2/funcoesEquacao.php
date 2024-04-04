<?php
    function validarCampos($a, $b, $c) {
        $msgErro = "";
        if (empty($a)) {
            $msgErro = $msgErro . "<FONT color=blue> Informe o coeficiente <b>a</b> (valor que acompanha o x):<br></FONT>";
        }

        if ($b === null or empty($b)) {
            $msgErro = $msgErro . "<FONT color=blue> Informe o coeficiente <b>b</b> (valor que acompanha o y):<br></FONT>";
        }

        if ($c === null or empty($c)) {
            $msgErro = $msgErro . "<FONT color=blue> Informe o coeficiente <b>c</b> (valor sozinho):<br></FONT>";
        }
        return $msgErro;
    }


    function calcularEquacao($a, $b, $c) {
        $msgErro = validarCampos($a, $b, $c);

        if (!empty($msgErro)) {
            echo $msgErro;
        } else {

            // Delta
            $d = ($b * $b) - 4 * $a * $c;

            // Raizes
            $x1 = ((- $b) + sqrt($d)) / (2 * $a);
            $x2 = ((- $b) - sqrt($d)) / (2 * $a);

            return "As raízes são $x1 e $x2";
        }
    }


    function delta($a, $b, $c) {
        $msgErro = validarCampos($a, $b, $c);
        $resultadoEquacao = "";

        if (!empty($msgErro)) {
            echo $msgErro;
        } else {
            $d = ($b * $b) - 4 * $a * $c;

            // Verificar d
            if ($d < 0) {
                $resultadoEquacao = $resultadoEquacao . "Não há solução real";
            } elseif ($d == 0) {
                $resultadoEquacao = $resultadoEquacao . "Há duas soluções reais iguais";
            } else {
                $resultadoEquacao = $resultadoEquacao . "Há duas soluções reais diferentes";
            }
        }
        return $resultadoEquacao;
    }


    function concavidade($a, $b, $c) {
        $msgErro = validarCampos($a, $b, $c);

        if (!empty($msgErro)) {
            echo $msgErro;
        } else {
            $concavidade = "";

            // Concavidade
            if ($a > 0) {
                $concavidade = $concavidade . "<FONT color = blue> Concavidade voltada para cima </FONT>";
            } else {
                $concavidade = $concavidade . "<FONT color = red> Concavidade voltada para baixo </FONT>";
            }
        }
        return $concavidade;
    }
?>
