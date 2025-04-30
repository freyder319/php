<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function ValidarContrasenia($clave,$confirmaclave){
        if ($clave==$confirmaclave){
            echo "Las contraseñas Ingresadas Coinciden";
        }else{
            echo "Las contraseñas no coinciden";
        }
    }
    $contrasenia=$_REQUEST['contrasenia'];
    $contrasenia2=$_REQUEST['contrasenia2'];
    ValidarContrasenia($contrasenia,$contrasenia2);
    ?>
</body>
</html>