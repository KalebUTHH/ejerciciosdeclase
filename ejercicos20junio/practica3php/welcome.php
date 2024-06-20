<?php 
//recuperar valores del input 
$nombre = $_POST["name"];
$edad = $_POST["edad"];
if ($edad>=18)
    echo "PUEDES VOTAR";
else
    echo "NO puedes votar, crece más";
?>