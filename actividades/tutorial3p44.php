<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="pagina44.php" method="post">
        Ingrese nombre:
        <input type="text" name="nombre"><br><br>
        Ingrese mail:
        <input type="text" name="mail"><br><br>
        Dia
        Fecha de Nacimiento :
        Día:
<select name="dia">
    <?php  
    for ($i = 1; $i <= 31; $i++) {
        echo "<option value='$i'>$i</option>";
    }
    ?>
</select>

Mes:
<select name="mes">
    <?php  
    for ($i = 1; $i <= 12; $i++) {
        echo "<option value='$i'>$i</option>";
    }
    ?>
</select>

Año:
<select name="anio">
    <?php  
    for ($i = 1900; $i <= 2025; $i++) {
        echo "<option value='$i'>$i</option>";
    }
    ?>
</select>

        <br><br>
        Seleccione el curso:
        <select name="codigocurso">
        <?php
        $conexion=mysqli_connect("localhost","root","","b1") or
            die("Problemas con la conexión");
        $registros=mysqli_query($conexion,"select codigo,nombrecurso from
        cursos") or
            die("Problemas en el select:".mysqli_error($conexion));
        while ($reg=mysqli_fetch_array($registros))
        {
        echo "<option value=\"$reg[codigo]\">$reg[nombrecurso]</option>";
        }
        ?>
        </select>
        <br>
        <br>
        <input type="submit" value="Registrar">
    </form>
</body>
</html>