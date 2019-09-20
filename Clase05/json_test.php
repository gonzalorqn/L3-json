<?php
$producto = isset($_POST["producto"]) ? $_POST["producto"]:null;
//var_dump($producto);

$objProd = new stdClass();
$objProd = json_decode($producto);
//echo($objProd->nombre);
$prodModificado = $objProd;
$prodModificado->nombre = "calabaza";
$prodModificado->precio = 400;
$prodModificado->codigo_barra = "ABC321";

$objModif = json_encode($prodModificado);

echo($objModif);
