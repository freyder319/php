<?php
$ar=fopen("RegistroDeQueja.txt","a") or
        die("Problemas en la creacion");
    fputs($ar,$_REQUEST['nombre']);
    fputs($ar,"\n");
    fputs($ar,$_REQUEST['quejas']);
    fputs($ar,"\n");
    fputs($ar,"Fecha:");
    fputs($ar,"\n");
    fputs($ar,$fecha=date("d/m/Y"));
    fputs($ar,"\n");
    fputs($ar,"hora:");
    fputs($ar,"\n");
    fputs($ar,$hora=date("H:i:s"));
    fputs($ar,"\n");
    fputs($ar,"------------------------------------------"); 
    fputs($ar,"\n");
    fclose($ar);
    echo "Los datos se cargaron correctamente.";
    echo "<br><br>";
    echo "<a href='pagina42_2.php'>Ir a ver</a>";
?>