<?php 
    session_start();
   

?>
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
    die ("PRoblemas con la conexion");
    $registros=mysqli_query($conexion,"select * from alumnos where mail='$_REQUEST[correo]'") or
    die("Problemas con el select:".mysqli_error($conexion));
    if ($reg=mysqli_fetch_array($registros)){
        $_SESSION['correo']=$reg['mail'];
        $_SESSION['nombre']=$reg['nombre'];
    }else{
        echo "Sesion no creada";
    }

    echo $_SESSION['nombre'];    ?>
</body>
</html>