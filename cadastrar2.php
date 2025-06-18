<?php
    include 'conexao.php';
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $bairro = $_POST['bairro']; 

        $sql = "INSERT INTO testes(estado,cidade,bairro) VALUES ('$estado','$cidade','$bairro');";

        if ($mysqli->query($sql)) {

            echo " Pessoa cadastrada";
        } else {
            echo "Erro: " . $mysqli->error;
        }

    }
?>