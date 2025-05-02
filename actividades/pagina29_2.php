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
        die("Problemas cona la conexion");
    $registros=mysqli_query($conexion,"update alumnos set codigocurso")
    ?>
</body>
</html>