<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "controledefrota";
$id_pessoa = $_GET["id"];
$beneficio = $_GET["situacao"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE pessoa SET beneficio = (SELECT descricao from tipo_beneficio WHERE id_tipo = $beneficio) WHERE pessoa.id_pessoa = $id_pessoa";
if ($conn->query($sql) === TRUE) {
    if ($beneficio == 0) {
        $sqlRejeitar = "UPDATE solicitacaobeneficio SET idf_situacao_solicitacao = 2 WHERE idf_pessoa = $id_pessoa";
        if ($conn->query($sqlRejeitar) === TRUE) {
            echo "Rejeitado";
        }
    } else {
        $sqlAprovar = "UPDATE solicitacaobeneficio SET idf_situacao_solicitacao = 1 WHERE idf_pessoa = $id_pessoa";
        if ($conn->query($sqlAprovar) === TRUE) {
            echo "Aprovado";
        }
    }
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?> 