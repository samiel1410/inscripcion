
<?php
require_once ("db.php");

class metodosInscripcion
{


    public function guardar($institucion,$curso ,$cedula ,$nombre ,$apellido ,$tipo_sangre ,$direccion,$provincia,$ciudad,$celular,$representante ,$num_representante,$correo,$estudios,$talla,$calzado)
    {
        $conn = conexion();
 

        $response = new stdClass();
        $data = Array();
        $query = "CALL `insertar_inscripcion_web`('$institucion','$curso','$cedula','$nombre','$apellido','$tipo_sangre','$direccion','$provincia','$ciudad','$celular','$representante','$num_representante','$correo','$estudios','$talla','$calzado')";

    

        $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

      
        if ($sql) {
            $resp= "Inscripcion  ingresada";
            $arry =  array("success"=> true ,"respuesta"=>$resp) ;
            header('Location:../../../exito.html');
        } else
        {$resp=  "No Ingresada";
        
        $arry =  array("success"=> False ,"respuesta"=>$resp) ;
        }
        


        
    }


    


   
}

?>