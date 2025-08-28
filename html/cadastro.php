<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/projeto-carros/css/cadastro.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="containerPai">
        <h1>Cadastrar</h1>
        <form method="POST" action="inserir_dados.php">
            <div class="containerInput">
                <label>Modelo:</label>
                <input type="text" name="modelo" required>
            </div>

            <div class="containerInput">
                <label>Ano:</label>
                <input type="number" name="ano" required>
            </div>

            <div class="containerInput">
                <label>Placa:</label>
                <input type="text" name="placa" required>
            </div>

            <div class="containerButtons">

                <a>

                    <button type="submit" class="b1">Enviar</button>


                </a>


                <a href="/projeto-carros/html/home.php">

                    <button class="b2" type="button">Voltar</button>

                </a>


            </div>

        </form>
    </div>

    
</body>

</html>


