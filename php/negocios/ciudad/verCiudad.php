<?php  

require_once  ("../../../php/clases/ciudad/ciudad.php");


$inicio = 0;
$limite = 25;
$id_provincia = $_GET['id_provincia'];
$ver= new metodosCiudad();
$ver->verCiudad($inicio,$limite,$id_provincia);

?>
