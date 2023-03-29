
<?php
require_once ("db.php");

class metodosCiudad
{


    public function verCiudad($inicio,$limite,$id_provincia)
    {
        $conn = conexion();
 

        $response = new stdClass();
        $data = Array();
        $query = "SELECT id, canton from tbl_canton where id_provincia= $id_provincia ";

    

        $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

        $total = mysqli_num_rows($sql);
        $response->success = true;
        $response->total = $total;
        $response->mensaje = "Ciudad";
        $i = 0;

        while ($vals = mysqli_fetch_array($sql)) {

            $data[$i]['id_ciudad'] = $vals['id'];
            $data[$i]['nombre_ciudad'] = $vals['canton'];

            $i ++;
        }
        $response->data = array_slice($data, $inicio, $limite);
        echo json_encode($response);
    }


    


   
}

?>