<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$tablaAscii = "";

for ($i = 32; $i <= 126; $i++) {
    $tablaAscii .= sprintf("Código: %3d, Carácter: %c\n", $i, $i);
}

echo nl2br($tablaAscii);
?>
</body>
</html>