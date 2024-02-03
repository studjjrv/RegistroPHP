<?php
// Configuracion de la base de datos

$servername = "localhost";
$username = "root";
$password = "";
$database = "datos";

// Crear la conexion
$conn = new mysqli($servername, $username, $password, $database);

// Hay que verificar si la conexion fue exitosa
if ($conn->connect_error){
    die("Error de conexion a la base de datos: " . $conn->connect_error);
}

//echo "Conexion exitosa";

// Podemos crear consultas

// Cerramos la conexion
//$conn->close();

?>