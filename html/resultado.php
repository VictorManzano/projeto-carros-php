<?php
include_once("conexão.php");

$placa = $_POST['placa'];

// Prepara a consulta
$query = $pdo->prepare("SELECT * FROM veiculos WHERE placa = :placa");
$query->bindValue(":placa", $placa);
$query->execute();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/projeto-carros/css/resultado.css">
    <title>Resultado</title>
</head>
<body>
    <div class="containerPai">
        <h1>Resultado:</h1>
        <?php
        if($query->rowCount() > 0){
            $veiculo = $query->fetch(PDO::FETCH_ASSOC);
            echo "<div class='cardVeiculo'>";
            echo "<h2>Modelo: " . htmlspecialchars($veiculo['modelo']) . "</h2>";
            echo "<p><strong>Ano:</strong> " . htmlspecialchars($veiculo['ano']) . "</p>";
            echo "<p><strong>Placa:</strong> " . htmlspecialchars($veiculo['placa']) . "</p>";
            echo "</div>";
        } else {
            echo "<script>
                    alert('Placa não encontrada!');
                    window.location.href = 'consulta.php';
                  </script>";
        }
        ?>
        <a href="consulta.php" class="voltar">Voltar</a>
    </div>
</body>
</html>
