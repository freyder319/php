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
    die ("Problema con la conexion");
    $registros=mysqli_query($conexion,"select * from cursos where nombrecurso='$_REQUEST[nombre]'") or
    die("Problemas en el select_".mysqli_error($conexion));
    if ($reg=mysqli_fetch_array($registros)){
    ?>
    <form action="pagina25_2.php" method="post">
        Ingrese el Nuevo nombre del curso:
        <input type="text" name="nombrenew" value="<?php echo $reg['nombrecurso'] ?>">
        <br>
        <input type="hidden" name=nombreviejo value="<?php echo $reg['nombrecurso'] ?>">
        <br><br>
        <input type="submit" value="Modificar">
    </form>
    <?php 
    }else{
        echo "No existe el curso con dicho nombre";
    }
    ?>
</body>
</html>