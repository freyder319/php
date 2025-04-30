<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $semana[]="Lunes";
    $semana[]="Martes";
    $semana[]="Miercoles";
    $semana[]="Jueves";
    $semana[]="Viernes";
    $semana[]="Sabado";
    $semana[]="Domingo";
    for($f=0;$f<count($semana);$f++){// se puede utilizar sizeof
        echo $semana [$f];
        echo "<br>";
    }
    ?>
</body>
</html>