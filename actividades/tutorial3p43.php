<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <form action="pagina43.php" method="post">
    Dia
    <select name="dia" id="">
        <?php 
        for ($i = 1; $i <= 30; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
    <br>
    </select>
    Mes
    <select name="mes" id="">
        <?php 
        for ($i = 1; $i <= 12; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
        <br>
    </select>
    Año
    <select name="anio" id="">
        <?php 
        for ($i = 2000; $i <= 2025; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        ?>
        <br>
    </select>
    <br><br>
    <input type="submit" value="Validar">
   </form> 
</body>
</html>