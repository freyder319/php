<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "El nombre ingresado es:";
    echo $_REQUEST['nombre'];
    echo "<br>";
    echo "Su edad es:";
    echo $_REQUEST['edad'];
    echo "<br>";
    if($_REQUEST['edad']>=18){
        echo "Usted es Mayor de edad";
    }else{
        echo "Usted es Menor de edad";
    }
    ?>
</body>
</html>