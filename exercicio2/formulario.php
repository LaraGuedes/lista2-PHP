<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equação de 2°Grau</title>
</head>
<body>
    <h1>Equação do segundo grau</h1>
    <form action="equacoes.php" method="POST">
        <label for="a">Informe o coeficiete <b>a</b> (valor que acompanha o x):</label>
        <input type="text" id="a" name="a" value="">
        <br><br>
        <label for="b">Informe o coeficiete <b>b</b> (valor que acompanha o y):</label>
        <input type="text"  id="b" name="b" value="">
        <br><br>
        <label for="b">Informe o coeficiete <b>c</b> (valor sozinho):</label>
        <input type="text" id="c" name="c" value="">
        
        <input type="submit" name="btnEnviar" value="Enviar">
    </form>

    <?php
        // Mostrar a mensagem 
        if ( isset($_GET["msg"])  ) {
            $mensagem = $_GET["msg"];
            echo "$mensagem";
        }
    ?>
</body>
</html>