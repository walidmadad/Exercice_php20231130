<?php 
require_once("Livre.php");
$livre = new Livre("testNom","TestTitre", "testPays", 150);
echo $livre->__toString();