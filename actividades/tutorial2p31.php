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
      $registros=mysqli_query($conexion,"select codigo as codigocur, nombrecurso from cursos;") or 
      die("Problemas con el select:".mysqli_error($conexion));
      while ($reg=mysqli_fetch_array($registros)){
        echo"<a href='pagina31.php?codigocur=".$reg['codigocur']."'>".$reg['nombrecurso']."</a><br><br>";
      }
      ?>
</body>
</html>