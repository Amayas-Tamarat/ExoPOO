<?php 
require('./entity/chien.php');

$chien =  new Chien;
echo $chien ->info().'<br>';
echo $chien ->infoPlus().'<br>';
echo $chien ->crie();

?>