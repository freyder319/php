<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
    $nombre = $_POST["nombre"];
    $email = $_POST["mail"];
    $importe = $_POST["aporte"];
    printf("Gracias $nombre por donar $%'07d pesos",$importe);
?>
</body>
</html>
