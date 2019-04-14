

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

$sql = "UPDATE pessoa SET beneficio = '2' WHERE pessoa.id_pessoa = 1";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>