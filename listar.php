<?php

include 'conexao.php';

$sql = "SELECT * FROM cliente";
$resultado = $mysqli->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table border= '1' cellpadding= '5'>";
    echo "<tr><th>ID</th>
    <th>Nome</th>
    <th>Telefone</th>
    <th>Endereço</th><tr>";

    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['telefone'] . "</td>";
        echo "<td>" . $row['endereco'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";

 } else {
        echo "<p>Nenhum cliente cadastrado</p>";
    }











?>