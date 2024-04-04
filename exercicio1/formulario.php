<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .titulo{
            background-color: black;
            padding: 10px 0;
            height: 60px; 
            
        }
        .formulario{
            margin-left: 20px;
        }
        h1 {
            color: #fff;
            padding-left: 20px;
        }
        p{
            font-size: 18px;
            font-weight: bold;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 500px;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: black;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="titulo">
        <h1>Calculando o IMC</h1>
    </div>
    <div class="formulario">
        <form action="mdc.php" method="POST">
            <label for="altura">Informe sua altura:</label>
            <input type="text" id="altura" name="altura" value="" >
            <br><br>
            <label for="peso">Informe seu peso:</label>
            <input type="text" id="peso" name="peso" value="" >
            <input type="submit" name="btnEnviar" value="Enviar">
        </form>
        <p>Resultado:</p>

        <?php
            // Mostrar a mensagem 
            if ( isset($_GET["msg"])  ) {
                $mensagem = $_GET["msg"];
                echo "$mensagem";
            }
        ?>
    </div>
</body>
</html>