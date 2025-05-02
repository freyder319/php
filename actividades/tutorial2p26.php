<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pagina26.php" method="post">
    Ingrese nombre:
    <input type="text" name="nombre">
    <br><br>
    Ingrese mail:
    <input type="text"name="mail">
    <br><br>
    Selecciona Tu curso:
    <br><br>
    <?php 
    $conexion=mysqli_connect("localhost","root","","b1") or
        die("Problemas con la conexión");
    $registros=mysqli_query($conexion,"select codigo,nombrecurso from cursos") or
        die("Problemas con el select:".mysqli_error($conexion));
    while ($reg=mysqli_fetch_array($registros)){
        echo "<input type='radio' name='codigocurso' value=\"$reg[codigo]\">$reg[nombrecurso] <br>";
    }
    ?>
    <br><br>
    <input type="submit" value="Registrar">
    </form>
</body>
</html>