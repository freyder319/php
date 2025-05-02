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
    $registros=mysqli_query($conexion,"select nombrecurso from cursos") or
        die("Problemas en el select:".mysqli_error($conexion));
    echo "-----------Cursos---------------";
    echo "<br>";
    while ($reg=mysqli_fetch_array($registros)){
        echo $reg['nombrecurso'], "<br>";
    }
    $registros=mysqli_query($conexion,"select count(*) as cantidad from cursos") or
        die("Problemas en el select:".mysqli_error($conexion));
    $reg=mysqli_fetch_array($registros);
    echo "Cantidad de cursos:".$reg['cantidad'];
    ?>
</body>
</html>