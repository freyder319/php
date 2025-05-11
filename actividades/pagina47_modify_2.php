<?php


$conexion = new mysqli("localhost", "root", "", "b1");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$codigo = $_POST['codigo'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$codigorubro = $_POST['codigorubro'];
$sql = "UPDATE articulos SET descripcion='$descripcion', precio='$precio', codigorubro='$codigorubro' WHERE codigo='$codigo'";
    if ($conexion->query($sql)) {
    if ($conexion->affected_rows > 0) {
        echo "Producto modificado. <br>";
        echo "<a href='tutorial4p47.php'>Ir al inicio</a>";
}

}

$conexion->close();
?>
