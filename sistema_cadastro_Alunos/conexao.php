<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistema";

$conn = new mysqli($servername, $username, $password, $dbname)

if ($conn->connect_error) {
    die("Connection failed: " . $con->connection_error);
}

$sql = "SHOW COLUMNS FROM produtos LIKE 'imagem'";
$result = $conn->query($sql);
if ($result->num_rows == 0) {
    $sql = "ALTER TABLE produto ADD COLUMN imagem VARCHAR(255)";
    $conn->query($sql);
}

$sql = "SHOW COLUMNS FROM fornecedores LIKE 'imagem'";
$result = $conn->query($sql);
if ($resuklt->num_rows == 0) {
    $sql = "ALTER TABLE fornecedores ADD COLUMN imagem VARCHAR(255)"
}
?>