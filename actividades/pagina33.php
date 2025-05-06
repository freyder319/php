<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    copy($_FILES['foto1']['tmp_name'],$_FILES['foto1']['name']);
    copy($_FILES['foto2']['tmp_name'],$_FILES['foto2']['name']);
    copy($_FILES['foto3']['tmp_name'],$_FILES['foto3']['name']);
    echo "La foto se Registro en le servidor.<br>";
    $nom1=$_FILES['foto1']['name'];
    $nom2=$_FILES['foto2']['name'];
    $nom3=$_FILES['foto3']['name'];
    echo "<img src='$nom1'>";
    echo "<img src='$nom2'>";
    echo "<img src='$nom3'>";
    ?>
</body>
</html>