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
        die("Problemas con al conexion");
    $registros=mysqli_query($conexion,"select * from alumnos where codigo='$_REQUEST[codigo]'") or
        die("Problemas en el select".mysqli_error($conexion));
    if ($regalu=mysqli_fetch_array($registros)){
        ?>
        <form action="pagina29_2.php" method="post">

            Curso (Actual):
            <select name="codigocurso">
            <?php
            $registros=mysqli_query($conexion,"select * from cursos") or
                die("Problemas en el select:".mysqli_error($conexion));
            while ($reg=mysqli_fetch_array($registros)){
                if ($regalu['codigocurso']==$reg['codigo']){
                    echo "<option value='$reg[codigo]' selected>$reg[nombrecurso]</option>";
                }else
                    echo "<option value='$reg[codigo]'>$reg[nombrecurso]</option>";
            }
            ?>
            </select>
            <br>
            <br>
            <input type="hidden" name="codigo_alumno" value="<?php echo $regalu['codigo'] ?>">
            Nombre (Actual)
            <input type="text" name="nombrenew" value="<?php echo $regalu['nombre'] ?>">
            <br><br>
            <input type="hidden" name=nombreviejo value="<?php echo $regalu['nombre'] ?>">
            Mail (Actual):
            <input type="text" name="correonew" value="<?php echo $regalu['mail'] ?>">
            <br>
            <input type="hidden" name="correoviejo" value="<?php echo $regalu['mail'] ?>">
            <br><br>
            <input type="submit" value="Modificar">
        </form>
        <?php 
    }
    else
        echo "No existe alumno con dicho codigo."
    
        ?>
</body>
</html>