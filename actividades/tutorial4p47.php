<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conexion = new mysqli("localhost", "root","", "b1");
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    $sql = "SELECT articulos.*, rubros.descripcion AS nombre_rubro FROM articulos INNER JOIN rubros ON articulos.codigorubro = rubros.codigo;
";
    $resultado = $conexion->query($sql);
    if($resultado->num_rows ==0){
        echo "No hay registros en la tabla";
        echo "<br><br>";
        ?>
        <form action="pagina47.php" method="post">
        <input type='submit' value='Registrar'>
        </form>
        <?php
    }else{ 
        echo "----------------Productos----------------- <br><br>";
        while ($reg=$resultado->fetch_assoc()){
            ?>
            <div class="container" style="border: dashed 2px black;width:200px;padding:10px;">
            <?php
            echo "<br>";
            echo "Codigo Producto:".$reg['codigo'];
            echo "<br>";
            echo "Descripcion:".$reg['descripcion'];
            echo "<br>";
            $precios=$reg['precio'];
            printf("Precio:$%'07d COP",$precios);
            echo "<br>";
            echo "Categoria:".$reg['nombre_rubro'];
            echo "<br>";
            echo "<br>";
            ?>
            <form action="pagina47_modify.php" method="post">
            <input type="hidden" name="codigo" value="<?php echo $reg['codigo']; ?>">
                <input type="submit" value="Modificar">
            </form>
            <br>
            <form action="pagina47_delete.php" method="post">
                <input type="hidden" name="code" value="<?php echo $reg['codigo']; ?>">
                <input type="submit" value="Eliminar" style="background: red;color:white;border:1px solid black;">
            </form>
            </div>
            <br>
            <?php
            
        }
        if (isset($_REQUEST['eliminado'])){
            echo "Producto Eliminado Satifactoriamente!";
        }
        ?>
        <br>
        ----------Registrar Producto-------------
        <br><br>
        <form action="pagina47.php" method="post">
        <input type='submit' value='Registrar'>
        </form>
        <?php
    }

    ?>
</body>
</html>