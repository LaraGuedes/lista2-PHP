<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
    <h1>Calculando o IMC</h1>
    <form action="mdc.php" method="POST">
        <label for="altura">Informe sua altura:</label>
        <input type="text" id="altura" name="altura" value="" >
        <br><br>
        <label for="peso">Informe seu peso:</label>
        <input type="text" id="peso" name="peso" value="" >
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