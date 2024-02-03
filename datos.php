<?php

include("config.php");



if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $contrasena = $_POST['contrasena'];
    $usuario = $_POST['usuario'];
    

    $sql = "INSERT INTO usuarios (nombre,apellido,email,direccion,telefono,contrasena,usuario) VALUES ('$nombre','$apellido','$email','$direccion','$telefono','$contrasena','$usuario')";

   
    if($conn->query($sql) === TRUE){
        echo'<script type="text/javascript">
        alert("Usuario registrado exitosamente");
        window.location.href="index.php";
        </script>';
    }else{
        echo'<script type="text/javascript">
        alert("Error al crear el registro");
        window.location.href="index.php";
        </script>';
    }

    $conn->close();
}


?>