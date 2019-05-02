<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "controledefrota";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_FILES['arquivo'])) {
                $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
                $novo_nome = md5(time()) . $extensao;
                $diretorio = "upload/";

                move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $novo_nome);

//                $id = "SELECT codAnuncio FROM anuncio ORDER BY codAnuncio DESC LIMIT 1";
//                $result = $conectar->query($id);
//                $row = mysqli_fetch_assoc($result);
//                $sql_code = "UPDATE anuncio SET capa = '$novo_nome' WHERE codAnuncio = " . $row["codAnuncio"] . "";
//                if (!mysqli_query($link, $sql_code)) {
//                    $msg = "Falha ao enviar o arquivo";
//                    echo '<script>alert("Por algum motivo seu anúncio não realizado!");</script>';
//                } else {
//                    $msg = "Arquivo enviado com sucesso";
//
//                    echo "<script>window.location = '../logado/paginadeupload2.php';</script>";
                }
$conn->close();
?> 