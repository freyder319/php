<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_REQUEST['nombre'])){
    setcookie("nombre","$_REQUEST[nombre]",time()+60*60*24*365,"/");
}

?>
<html>
<head>
<title>Problema</title>
</head>
<body>
Se creó la cookie.
<br>
<a href="tutorial3p34.php">Ir a la otra página</a>

</body>
</html>
</body>
</html>