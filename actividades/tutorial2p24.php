<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $conexion=mysqli_connect("localhost","root","","b1") or
        die("Problemas con la conexion");
    mysqli_query($conexion,"delete from cursos") or
        die("Problemas en el select:".mysqli_error($conexion));
    echo "se efectuó el borrado de todos los cursos.";
    mysqli_close($conexion)
    ?>
</body>
</html>