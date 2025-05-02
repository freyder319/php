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
        die("problemas de la conexion");
    $registros=mysqli_query($conexion,"select codigo,nombrecurso from cursos") or
        die("Problemas en el select:".mysqli_error(($conexion)));
    while ($reg=mysqli_fetch_array($registros)){
        echo "codigo:".$reg['codigo'];
        echo "nombre:".$reg['nombrecurso'];
        echo "<br>";
        echo "<hr>";
    }
    mysqli_close($conexion);
    ?>
</body>
</html>