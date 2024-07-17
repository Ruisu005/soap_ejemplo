<?php
$servername = "localhost:3309";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
