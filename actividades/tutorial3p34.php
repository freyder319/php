<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<html>
<head>
<title>Problema</title>
</head>
<body>
<form action="pagina34.php" method="post">
Ingrese Nombre:<br>
<input type="text" name="nombre" value="<?php if (isset($_COOKIE['nombre'])){
    echo $_COOKIE['nombre'];
}?>">
<br><br>
<input type="submit" value="Crear cookie">
</form>
</body>
</html>
</body>
</html>