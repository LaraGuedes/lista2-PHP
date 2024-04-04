<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equação de 2°Grau</title>
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
        <h1>Equação do segundo grau</h1>
    </div>
    <div class="formulario">
        <form action="equacoes.php" method="POST">
            <label for="a" style>Informe o coeficiete <b>a</b> (valor que acompanha o x):</label>
            <input type="text" id="a" name="a" value="">
            <br><br>
            <label for="b">Informe o coeficiete <b>b</b> (valor que acompanha o y):</label>
            <input type="text"  id="b" name="b" value="">
            <br><br>
            <label for="b">Informe o coeficiete <b>c</b> (valor sozinho):</label>
            <input type="text" id="c" name="c" value="">
            
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