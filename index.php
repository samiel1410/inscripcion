<?php
require_once ("db.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body>
    <div class="container">





        <div class="row nav">
            <div class="col icon">
                <i class="fab fa-facebook-f  icono " style="color: white;"></i>
                <i class="fab fa-twitter  icono" style="color: white;"></i>

                <i class="fab fa-youtube  icono" style="color: white;"></i>

                <i class="fab fa-whatsapp icono" style="color: white;"></i>
                <i class="fab fa-instagram icono" style="color: white;"></i>

            </div>
            <div class="col">


                <span>

                    <i class="fas fa-mobile-alt icono" style="color: white;"></i> 0987548325 - 0960939267 <i
                        class="fas fa-envelope icono2" style="color: white;"></i> info@grupolalegion.ec
            </div>
            </span>



        </div>

    </div>


    <div class="imagen">

        <img src="images/membrete2.jpg" class="img-fluid" alt="Responsive image" width="1000">

    </div>




    <div class="container">
        <div class="formulario">


            <div class="form2">
                <div class="titulo">
                    Formulario de Inscripciones
                </div>


                <div class="input2">

                    <form>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Institucion</label>
                            <div class="col-sm-10">

                                <select class="form-control" id="selectTab2Gestion">
                                    <option value="0">Seleccione:</option>
                                    <?php
 $conn=conexion();
$query = "select * from empresa";

    

$sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

$total = mysqli_num_rows($sql);

$i = 0;

while ($vals = mysqli_fetch_array($sql)) {

    echo '<option value="'.$vals['id_empresa'].'">'.$vals['alias_empresa'].'</option>';
}
     
        ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Curso</label>
                            <div class="col-sm-10">

                                <select class="form-control">
                                    <option value="0">Seleccione:</option>
                                    <?php
 $conn=conexion();

 echo "<script language='javascript'>";
echo "const selectElement = document.querySelector('#selectTab2Gestion');";
echo "alert(selectElement);";
echo "</script>";  
$query = "SELECT id_curso, nombre_curso from cursos,sucursal where id_fkempresa_sucursal = 2 AND cursos.id_fksucursal_curso = sucursal.id_sucursal; ";

    

$sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

$total = mysqli_num_rows($sql);

$i = 0;

while ($vals = mysqli_fetch_array($sql)) {

    echo '<option value="'.$vals['id_empresa'].'">'.$vals['alias_empresa'].'</option>';
}
     
        ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                            </div>
                        </div>
                    </form>



                </div>



            </div>

        </div>


    </div>





    <div class="container">



        <div class="row nav pie">
            <div class="col ">

                <div>©2023 Grupo La Legion. Todos los derechos reservados. </div>
                <div>Diseño web Ambato Ecuador CONNECTAMBATO</div>
            </div>

            </span>



        </div>
    </div>





    </div>













    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js"
        integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
    </script>
</body>

</html>