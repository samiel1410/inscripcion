<?php  

require_once  ("../../../php/clases/cursos/curso.php");


$inicio = 0;
$limite = 25;
$id_institucion = $_GET['id_institucion'];
$ver= new metodosCurso();
$ver->verCursos($inicio,$limite,$id_institucion);

?>
