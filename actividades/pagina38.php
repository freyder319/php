<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function retornarconexion($tit){
        $conexion=mysqli_connect("localhost","root","","b1") or
            die("PRoblemas con la conexion");
        $registros=mysqli_query($conexion,"select * from alumnos") or
            die("Problemas con el select:".mysqli_error($conexion));
        if (isset($registros)){
            while ($reg=mysqli_fetch_array($registros)){
                echo "Codigo de Almuno:".$reg['codigo']."<br>" ;
                echo "Nombre de Alumno:".$reg['nombre']."<br>" ;
                echo "Mail de Alumno:".$reg['mail']."<br>" ;
                echo "Codigo del Curso:".$reg['codigocurso']."<br>" ;
                echo "<hr>" ;
            }
        }else{
            echo "No hay alumnos registrados" ;
        }
    }
    ?>
</body>
</html>