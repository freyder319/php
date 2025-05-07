<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "La direccion: $_REQUEST[enlace] tiene";
    ?>
    <img src="pagina41_2.php?puntos=<?php echo $_REQUEST['numero'];?>">
</body>
</html>