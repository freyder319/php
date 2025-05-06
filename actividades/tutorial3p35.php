<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_COOKIE['radio1'])){
        echo "Noticias Politicas";
        echo "<br>";
        echo "<a href='pagina35.php?borrar=borrar'>Borrar Cookie</a>";
    }elseif (isset($_COOKIE['radio2'])){
        echo "Noticias Economicas";
        echo "<br>";
        echo "<a href='pagina35.php?borrar=borrar'>Borrar Cookie</a>";
    }elseif (isset($_COOKIE['radio3'])){
        echo "Noticias Deportivas";
        echo "<br>";
        echo "<a href='pagina35.php?borrar=borrar'>Borrar Cookie</a>";
    }else{
        ?>
        <form action="pagina35.php" method="post">
            <input type="radio" name="radio" value="np">Noticia Politica
            <br>
            <input type="radio" name="radio" value="ne">Noticia Economica
            <br>
            <input type="radio" name="radio" value="nd">Noticia Deportiva
            <br><br>
            <input type="submit" value="Crear cookie">
        </form>
        <?php
    }
    ?>

</body>
</html>