<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $ar=fopen("pedidos.txt","a") or
        die("Problemas en la creacion");
    fputs($ar,$_REQUEST['nombre']);
    fputs($ar,"\n");
    fputs($ar,$_REQUEST['direccion']);
    if (isset($_REQUEST['check1'])){
        $check1="Jamon y Queso";
        fputs($ar,"\n");
        fputs($ar,$check1);
        fputs($ar," ");
        fputs($ar,$_REQUEST['cantidad1']);
    }
    if (isset($_REQUEST['check2'])){
        $check2="Napolitana";
        fputs($ar,"\n");
        fputs($ar,$check2);
        fputs($ar," ");
        fputs($ar,$_REQUEST['cantidad2']);
    }
    if (isset($_REQUEST['check3'])){
        $check3="Muzzarella";
        fputs($ar,"\n");
        fputs($ar,$check3);
        fputs($ar," ");
        fputs($ar,$_REQUEST['cantidad3']);
    }
    fputs($ar,"\n");
    fputs($ar,"------------------------------------------"); 
    fputs($ar,"\n");
    fclose($ar);
    echo "Los datos se cargaron correctamente.";
    ?>
</body>
</html>