<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conexion=mysqli_connect("localhost","root","","base1") or
        die("Problemas con la conexion");
    
        mysqli_query($conexion,"insert into cursos(codigo,nombrecurso) values ('','$_REQUEST[cursonew]')")
        or die("Problemas en el select".mysqli_error($conexion));
        mysqli_close($conexion);
        echo "El curso fue dado de alta";
    ?>
</body>
</html>