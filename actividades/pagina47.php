<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pagina47_2.php">
        ----------------------Crear Producto--------------------- <br><br>
        Descripcion Producto:
        <input type="text" name="descripcion">
        <br><br>
        Precio Producto:
        <input type="number" name="precio">
        <br><br>
        Categoria:
        <select name="codigorubro">
        <?php
        $conexion=mysqli_connect("localhost","root","","b1") or
            die("Problemas con la conexión");
        $registros=mysqli_query($conexion,"select codigo,descripcion from
        rubros") or
            die("Problemas en el select:".mysqli_error($conexion));
        while ($reg=mysqli_fetch_array($registros))
        {
        echo "<option value=\"$reg[codigo]\">$reg[descripcion]</option>";
        }
        ?>
        </select>
        <br><br>
        ----------------------<input type="submit" value="Registrar">--------------------------
        <br><br>
        <?php 
        if (isset($_REQUEST['guardado'])){
            echo "Producto Guardado Satifactoriamente!";
        }
        ?>
        
    </form>
    <br><br>
    <a href="tutorial4p47.php">Ir a pagina anterior</a>
</body>
</html>