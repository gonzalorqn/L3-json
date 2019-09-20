<?php
$path = isset($_POST["path"]) ? $_POST["path"]:null;
$archivo = fopen($path,"r");
$cadena = fread($archivo,filesize($path));
fclose($archivo);
echo $cadena;