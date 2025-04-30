<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "Su Nombre es: ",$_REQUEST['nombre'];
    echo "<br>";
    echo "Usted Practica Estos deportes:";
    echo "<br>";
    $cantidad=0;
    if (isset($_REQUEST['check1'])){
        echo "Futbol";
        echo "<br>";
        $cantidad+=1;
    }
    if (isset($_REQUEST['check2'])){
        echo "Basket";
        echo "<br>";
        $cantidad+=1;
    }
    if (isset($_REQUEST['check3'])){
        echo "Tennis";
        echo "<br>";
        $cantidad+=1;
    }
    if (isset($_REQUEST['check4'])){
        echo "Voley";
        $cantidad+=1;
        echo "<br>";
    }
    echo "Usted practica un total de ",$cantidad," Deporte";
    ?>
</body>
</html>