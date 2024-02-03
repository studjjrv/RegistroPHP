<?php

include("config.php");

//Consulta de seleccion
$sql = "SELECT * FROM usuarios";

$result = $conn->query($sql);

// Mostrar el resultado
if ($result->num_rows > 0){

    while ( $row = $result->fetch_assoc()){?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <div class="grid grid-cols-4 grid-rows-4">
                <label for=""><?php echo "<br>";?></label>
                <label for=""><?php echo "ID -> " . $row["id"] . "<br>";?></label>
                <label for=""><?php echo "Nombre -> " . $row["nombre"] . "<br>";?></label>
                <label for=""><?php echo "Apellido -> " . $row["apellido"] . "<br>";?></label>
                <label for=""><?php echo "Email -> " . $row["email"] . "<br>";?></label>
                <label for=""><?php echo "Dirección -> " . $row["direccion"] . "<br>";?></label>
                <label for=""><?php echo "Usuario -> " . $row["usuario"] . "<br>";?></label>
                <label for=""><?php echo "Contraseña Encriptada-> " . password_hash($row["contrasena"],PASSWORD_DEFAULT) . "<br>";?></label>
  
        
<?php } ?>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 col-span-2" onclick="registrar()">Registrar</button>

        <script>
        function registrar(){
        window.location="index.php";//pagina donde tienes tus consultas para borrar 
        }
        </script>

</div>            
        </body>
        </html>


<?php
} else{
    echo "0 resultados";
}

?>

