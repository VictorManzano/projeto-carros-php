<?php

    include_once("conexão.php");

    $modelo = $_POST['modelo'];
    $ano   = $_POST['ano'];
    $placa = $_POST['placa'];
  


	echo $modelo."<BR>";
	echo $ano."<br>";
    echo $placa."<br>";


    $verifica_produto = $pdo->prepare("SELECT placa FROM veiculos WHERE placa = :placa");
    $verifica_produto->bindValue(":placa", $placa);
    $verifica_produto->execute();
    $count = $verifica_produto->rowCount();
    if($count == 0){
        
        $pdo->query("INSERT INTO veiculos(modelo, ano, placa) VALUES('$modelo','$ano', '$placa')" );
    echo "<script>

        alert('Cadastro realizado com sucesso!');
        window.location.href = 'home.php';
    </script>";
       
         
    }
    else{
        echo"<script>
            alert('Placa já cadastrada');
            window.location.href = 'home.php';
        </script>";
        
    } 
 
    
?>