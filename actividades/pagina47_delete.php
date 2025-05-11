<?php 
    $conexion = new mysqli("localhost", "root","", "b1");
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    $sql = "DELETE FROM articulos WHERE codigo='$_REQUEST[code]'";
    if ($conexion->query($sql)) {
        if ($conexion->affected_rows > 0) {
            header("location:tutorial4p47.php?eliminado=eliminado");
        } else {
            echo "No se encontró un artículo con ese código.";
        }
    } else {
        echo "Error en la consulta: " . $conexion->error;
    }
    
?>