<?php
    include 'conexao.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];


        $sql = "INSERT INTO cliente (nome, telefone, endereco) VALUES ('$nome ',' $telefone','$endereco')";

        if ($mysqli->query($sql)) {

            echo " Pessoa cadastrada";
        } else {
            echo "Erro: " . $mysqli->error;
        }

    }

    





?>