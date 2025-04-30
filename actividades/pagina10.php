<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Su nombre es: ",$_REQUEST['nombre'];
    echo "<br>";
    if ($_REQUEST['radio1']=="xestudios"){
        echo "Usted No tuvo estudios";
    }elseif($_REQUEST['radio1']=="pestudios"){
        echo "Usted Tuvo Estudios Primarios";
    }else{
        echo "Usted Tuvo Estudios Secundarios";
    }
    ?>
</body>
</html>