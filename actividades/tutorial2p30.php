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
        die ("Problemas con la conexion");
    $registros=mysqli_query($conexion,"select cur.nombrecurso,count(alu.codigo) as cantidad, group_concat(alu.nombre separator ',') as estudiantes from alumnos as alu inner join cursos as cur on cur.codigo=alu.codigocurso group by cur.codigo order by cur.nombrecurso;") or
        die ("Problemas en el select:".mysqli_error($conexion));
    while ($reg=mysqli_fetch_array($registros)){
        echo "Nombre del curso:".$reg['nombrecurso']."<br>";
        echo "Cantidad de Inscritos:".$reg['cantidad']."<br>";
        echo "Alumnos:".$reg['estudiantes']."<br>";
        echo "<hr>";
    }
    mysqli_close($conexion)
    ?>
</body>
</html>