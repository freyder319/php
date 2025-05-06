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
    $registros=mysqli_query($conexion,"select nombre from alumnos inner join cursos on alumnos.codigocurso=cursos.codigo where alumnos.codigocurso=$_REQUEST[codigocur]") or
        die("Problemas con el select:".mysqli_error($conexion));
    echo "--------Estudiantes-------- <br>";
    while ($reg=mysqli_fetch_array($registros)){
        echo $reg['nombre'], "<br>";
    }
    if (!$registros) {
        echo "<p>No hay cursos disponibles.</p>";
    }
    

    
    ?>
</body>
</html>