<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if($_REQUEST['clave']<>"z80"){
        header("location:tutorial3p39.php?error=1");
    }else{
        header("location:tutorial3p39.php?user=1");
    }
    ?>
</body>
</html>