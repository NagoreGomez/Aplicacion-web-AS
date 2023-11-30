<?php
$servername = "db";
$username = "root";
$password = "DBrootNagoreAS";
$database = "database";


$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}
?>
