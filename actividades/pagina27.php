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
    $registros=mysqli_query($conexion,"select alu.codigo as codigo_alumno, nombre,mail,codigocurso,nombrecurso from alumnos as alu inner join cursos on cursos.codigo=alu.codigocurso where alu.codigo='$_REQUEST[codigo_alumno]'") or
        die("Problemas cen el select:".mysqli_error($conexion));
    if ($reg=mysqli_fetch_array($registros)){
        echo "codigo:".$reg['codigo_alumno']."<br>";
        echo "Nombre:".$reg['nombre']."<br>";
        echo "Mail:".$reg['mail']."<br>";
        echo "Curso:".$reg['nombrecurso']."<br>";
        echo "<hr>";
    }else{
        echo "No existe ese alumno.";
    }

    ?>
</body>
</html>