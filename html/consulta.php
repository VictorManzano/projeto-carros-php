<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/projeto-carros/css/consulta.css">
    <title>Consultar</title>
</head>
<body>

<form method="POST" action="resultado.php">
    <div class="containerPai">
        <h1>Digite sua placa:</h1>

        <input name="placa" type="text" required>

        <div class="containerButtons">

            <button class="b1" type="submit" >Enviar</button>

            <a href="/projeto-carros/html/home.php">
                Voltar
            </a>

        </div>
    </div>
</form>
</body>
</html>