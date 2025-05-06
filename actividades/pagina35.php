<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if (isset($_REQUEST['borrar'])){
        setcookie("radio1","$_REQUEST[radio]",time()-1000,"/");
        setcookie("radio2","$_REQUEST[radio]",time()-1000,"/");
        setcookie("radio3","$_REQUEST[radio]",time()-1000,"/");
        header("location: tutorial3p35.php");
    }else{
        if ($_REQUEST['radio']=="np"){
            setcookie("radio1","$_REQUEST[radio]",time()+60*60*24*365,"/");
        }elseif ($_REQUEST['radio']=="ne"){
            setcookie("radio2","$_REQUEST[radio]",time()+60*60*24*365,"/");
        }elseif ($_REQUEST['radio']=="nd"){
            setcookie("radio3","$_REQUEST[radio]",time()+60*60*24*365,"/");
        }
        header("location: tutorial3p35.php");
    }
    ?>
</body>
</html>