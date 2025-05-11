
<?php

$conexion = new mysqli("localhost", "root", "", "b1");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener el código del producto a modificar desde el formulario (POST)
$codigo = isset($_POST['codigo']) ? $_POST['codigo'] : null;

if ($codigo) {
    $consulta = $conexion->prepare("SELECT * FROM articulos WHERE codigo ='$codigo'");
    $consulta = $conexion->prepare("SELECT * FROM articulos WHERE codigo = ?");
    $consulta->bind_param("s", $codigo);
    $consulta->execute();
    $resultado = $consulta->get_result();

    if ($resultado->num_rows > 0) {
        $producto = $resultado->fetch_assoc();
    } else {
        die("Error: Producto no encontrado.");
    }
    $consulta->close();
} else {
    die("Error: No se proporcionó un código.");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Producto</title>
</head>
<body>
    <form action="pagina47_modify_2.php" method="POST">
        <input type="hidden" name="codigo" value="<?php echo $codigo; ?>">

        <h3>------------------Modificar Producto--------------------</h3>
        
        <label>Descripción Producto:</label>
        <input type="text" name="descripcion" value="<?php echo htmlspecialchars($producto['descripcion']); ?>">
        
        <br><br>

        <label>Precio Producto:</label>
        <input type="number" name="precio" value="<?php echo $producto['precio']; ?>">
        
        <br><br>

        <label>Categoría:</label>
        <select name="codigorubro">
            <?php
            $registros = $conexion->query("SELECT codigo, descripcion FROM rubros");

            while ($reg = $registros->fetch_assoc()) {
                $selected = ($reg['codigo'] == $producto['codigorubro']) ? "selected" : "";
                echo "<option value=\"$reg[codigo]\" $selected>$reg[descripcion]</option>";
            }
            ?>
        </select>

        <br><br>
        <input type="submit" value="Modificar">
    </form>

    <?php 
    if (isset($_REQUEST['modificado'])) {
        echo "<p style='color: green;'>El producto se modifico satifactoriamente!</p>";
    }
    ?>

</body>
</html>

<?php
$conexion->close();
?>