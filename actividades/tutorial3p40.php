<?php
$imagen = imagecreate(200, 100);
$colorFondo = imagecolorallocate($imagen, 220, 220, 220); // Gris claro
$colorBoton = imagecolorallocate($imagen, 0, 102, 204); // Azul
$colorTexto = imagecolorallocate($imagen, 255, 255, 255); // Blanco
imagefilledrectangle($imagen, 60, 30, 170, 70, $colorBoton);
imagestring($imagen, 5, 75, 45, "Click Aca", $colorTexto);
header("Content-Type: image/png");
imagepng($imagen);
imagedestroy($imagen);
?>