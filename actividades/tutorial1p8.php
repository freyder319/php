<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($f=1;$f<=10;$f++){
        $multi=$f*2;
        echo "2", " " , "x", " ";
        echo $f," ", "=", $multi;
        echo "<br>";
    }
    $valor=True;
    $valor1=2;
    $valor2=2;
    $valor3=1;
    echo "<br><br><br>";
    while($valor==True){
        echo $valor1," ","x"," ",$valor3," ","=",$valor2;
        echo "<br>";
        $valor3+=1;
        $valor2+=2;
        if ($valor3==10){
            $valor=False;
        }
    }
    echo "<br><br><br>";
    $valor1do=2;
    $valor2do=2;
    $valor3do=1;
    do{
        echo $valor1do," ","x"," ",$valor3do," ","=",$valor2do;
        echo "<br>";
        $valor3do+=1;
        $valor2do+=2;
    }while($valor3do!=11);
    echo "<br><br><br>";
    ?>
</body>
</html>