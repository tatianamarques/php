<?php
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$adicao = $n1 + $n2;

if ($adicao > 20){
    $resultado = $adicao + 8;
} else if ($adicao <=20){
    $resultado = $adicao - 5;
};
header("Location: index.php?resultado=".$resultado);
?>