<?php  

require_once  ("../../../php/clases/inscripcion/inscripcion.php");


$institucion = $_POST['institucion'];
$curso = $_POST['curso'];
$cedula = $_POST['cedula'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$tipo_sangre = $_POST['tipo_sangre'];

$direccion = $_POST['direccion'];
$provincia = $_POST['provincia'];
$ciudad = $_POST['ciudad'];
$celular = $_POST['celular'];
$representante = $_POST['representante'];
$num_representante = $_POST['num_representante'];
$correo = $_POST['correo'];
$estudios = $_POST['estudios'];
$talla = $_POST['talla'];
$calzado = $_POST['calzado'];


$ver= new metodosInscripcion();
$ver->guardar($institucion,$curso ,$cedula ,$nombre ,$apellido ,$tipo_sangre ,$direccion,$provincia,$ciudad,$celular,$representante ,$num_representante,$correo,$estudios,$talla,$calzado);

?>
