
<?php
require_once ("db.php");

class metodosCurso
{


    public function verCursos($inicio,$limite,$id_institucion)
    {
        $conn = conexion();
 

        $response = new stdClass();
        $data = Array();
        $query = "SELECT id_curso, nombre_curso from cursos,sucursal where id_fkempresa_sucursal = $id_institucion AND cursos.id_fksucursal_curso = sucursal.id_sucursal; ";

    

        $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

        $total = mysqli_num_rows($sql);
        $response->success = true;
        $response->total = $total;
        $response->mensaje = "Cursos";
        $i = 0;

        while ($vals = mysqli_fetch_array($sql)) {

            $data[$i]['id_curso'] = $vals['id_curso'];
            $data[$i]['nombre_curso'] = $vals['nombre_curso'];

            $i ++;
        }
        $response->data = array_slice($data, $inicio, $limite);
        echo json_encode($response);
    }


    


   
}

?>