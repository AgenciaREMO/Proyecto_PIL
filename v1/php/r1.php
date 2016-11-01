<?php

$url = $_GET['url'];
$uno = "/Proyecto_PIL/v1/r1-pollo-en-tomate.php";
$dos = "/Proyecto_PIL/v1/r2-muslo-tamarindo.php";
$tres = "/Proyecto_PIL/v1/r3-medallones-colima.php";
$cuatro = "/Proyecto_PIL/v1/r4-medallones-queso.php";
$cinco = "/Proyecto_PIL/v1/r5-alitas-tamarindo.php";
$seis = "/Proyecto_PIL/v1/r6-alitas-adobadas.php";
$siete = "/Proyecto_PIL/v1/r7-pierna-muslo-chipotle.php";
$ocho = "/Proyecto_PIL/v1/r8-pierna-muslo-rajas.php";
$nueve = "/Proyecto_PIL/v1/r9-pollo-xoconochtle.php";
$diez = "/Proyecto_PIL/v1/r10-pechuga-espinaca.php";
$once = "/Proyecto_PIL/v1/r11-pechuga-ajillo.php";
$doce = "/Proyecto_PIL/v1/r12-brochetas-pollo.php";

switch ($url) {
    case $uno:
        header("Content-disposition: attachment; filename=r1-pollo-en-tomate.pdf");
		header("Content-type: application/pdf");
		readfile("../recetas-pdf/r1-pollo-en-tomate.pdf");
        break;
    case $dos:
        header("Content-disposition: attachment; filename=r2-muslo-tamarindo.pdf");
		header("Content-type: application/pdf");
		readfile("../recetas-pdf/r2-muslo-tamarindo.pdf");
        break;
    case $tres:
        header("Content-disposition: attachment; filename=r3-medallones-colima.pdf");
        header("Content-type: application/pdf");
        readfile("../recetas-pdf/r3-medallones-colima.pdf");
        break;
    case $cuatro:
        header("Content-disposition: attachment; filename=r4-medallones-queso.pdf");
        header("Content-type: application/pdf");
        readfile("../recetas-pdf/r4-medallones-queso.pdf");
        break;
    case $cinco:
        header("Content-disposition: attachment; filename=r5-alitas-tamarindo.pdf");
        header("Content-type: application/pdf");
        readfile("../recetas-pdf/r5-alitas-tamarindo.pdf");
        break;
    case $seis:
        header("Content-disposition: attachment; filename=r6-alitas-adobadas.pdf");
        header("Content-type: application/pdf");
        readfile("../recetas-pdf/r6-alitas-adobadas.pdf");
        break;
    case $siete:
        header("Content-disposition: attachment; filename=r7-pierna-muslo-chipotle.pdf");
        header("Content-type: application/pdf");
        readfile("../recetas-pdf/r7-pierna-muslo-chipotle.pdf");
        break;
    case $ocho:
        header("Content-disposition: attachment; filename=r8-pierna-muslo-rajas.pdf");
        header("Content-type: application/pdf");
        readfile("../recetas-pdf/r8-pierna-muslo-rajas.pdf");
        break;
    case $nueve:
        header("Content-disposition: attachment; filename=r9-pollo-xoconochtle.pdf");
        header("Content-type: application/pdf");
        readfile("../recetas-pdf/r9-pollo-xoconochtle.pdf");
        break;
    case $diez:
        header("Content-disposition: attachment; filename=r10-pechuga-espinaca.pdf");
        header("Content-type: application/pdf");
        readfile("../recetas-pdf/r10-pechuga-espinaca.pdf");
        break;
    case $once:
        header("Content-disposition: attachment; filename=r11-pechuga-ajillo.pdf");
        header("Content-type: application/pdf");
        readfile("../recetas-pdf/r11-pechuga-ajillo.pdf");
        break;
    case $doce:
        header("Content-disposition: attachment; filename=r12-brochetas-pollo.pdf");
        header("Content-type: application/pdf");
        readfile("../recetas-pdf/r12-brochetas-pollo.pdf");
        break;
     default:
        echo "No existe pdf";
        break;
}
?>


