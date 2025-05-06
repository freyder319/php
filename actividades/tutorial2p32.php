
<?php
if (isset($_REQUEST['pos']))
$inicio=$_REQUEST['pos'];
else

$inicio=0;
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","b1") or
    die("Problemas con la conexión");
$registros=mysqli_query($conexion,"select * from cursos
limit $inicio,3;") or
    die("Problemas en el select:".mysqli_error($conexion));
$impresos=0;
while ($reg=mysqli_fetch_array($registros)){
$impresos++;
echo "Codigo:".$reg['codigo']."<br>";
echo "Nombre:".$reg['nombrecurso']."<br>";
echo "<hr>";
}
if ($inicio==0)
echo "anteriores ";
else
{
$anterior=$inicio-3;
echo "<a href=\"tutorial2p32.php?pos=$anterior\">Anteriores </a>";
}
if ($impresos==3)
{
$proximo=$inicio+3;
echo "<a href=\"tutorial2p32.php?pos=$proximo\">Siguientes</a>";
}
else

echo "siguientes";
mysqli_close($conexion);
?>
</body>
</html>
