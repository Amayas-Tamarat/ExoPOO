<?php
require ('./entity/formule1.php');

$voiture =  new Formule1(0);

var_dump($voiture);
echo $voiture->drive() .'<br>';
$voiture -> shitfGear(23);
echo $voiture->drive();
?>