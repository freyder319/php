<?php
$puntos = isset($_REQUEST['puntos']) ? intval($_REQUEST['puntos']) : 0;
$ancho = 300;
$alto = 100;
$imagen = imagecreate($ancho, $alto);
$colorFondo = imagecolorallocate($imagen, 220, 220, 220); 
$colorEstrella = imagecolorallocate($imagen, 255, 215, 0); 
function generarEstrella($cx, $cy, $radioExterior, $radioInterior) {
    $puntos = [];
    for ($i = 0; $i < 10; $i++) {
        $angulo = $i * 36;
        $r = ($i % 2 == 0) ? $radioExterior : $radioInterior;
        $x = $cx + $r * cos(deg2rad($angulo));
        $y = $cy + $r * sin(deg2rad($angulo));
        $puntos[] = $x;
        $puntos[] = $y;
    }
    return $puntos;
}

for ($i = 0; $i < $puntos; $i++) {
    $x = 40 + ($i * 50);
    $y = 50;
    $estrella = generarEstrella($x, $y, 15, 7);
    imagefilledpolygon($imagen, $estrella, 10, $colorEstrella);
}
header("Content-Type: image/png");
imagepng($imagen);
imagedestroy($imagen);
?>
