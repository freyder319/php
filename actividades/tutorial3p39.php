<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if (isset($_REQUEST['user'])){
        echo"Bienvenido!";
    }else{
        ?>
    <form action="pagina39.php" method="post">
        Ingrese Clave de acceso: <br><br>
        <input type="password" name="clave">
        <?php 
        if(isset($_REQUEST['error'])){
            echo "Ingreso clave incorrecta";
        }
        ?>
        <br><br>
        <input type="submit" value="Ingresar">
    </form>
    <?php
    }
    ?>

</body>
</html>