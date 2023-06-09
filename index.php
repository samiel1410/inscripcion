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
                   <p class="titulo2"> Formulario de Inscripciones</p> 
                </div>


                <div class="input2">

                    <form  action="php/negocios/inscripcion/guardar_registro.php" method="post">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Institucion</label>
                            <div class="col-sm-10">

                                <select class="form-control" id="institucion"  name="institucion" required>
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

                                <select class="form-control" id="curso" name="curso" required>
                                    <option value="0">Seleccione:</option>
        
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Cedula</label>
                            <div class="col-sm-10">
                                <input type="input" maxlength="13" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" name="num_representante"  class="form-control" name="cedula" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nombres</label>
                            <div class="col-sm-10">
                                <input type="input" class="form-control" name="nombre" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Apellidos</label>
                            <div class="col-sm-10">
                                <input type="input" class="form-control" name="apellido"  required>
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Tipo de Sangre</label>
                            <div class="col-sm-10">
                                <input type="input" class="form-control" name="tipo_sangre" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Direccion Domicilio</label>
                            <div class="col-sm-10">
                                <input type="input" class="form-control" name="direccion"  required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Provincia</label>
                            <div class="col-sm-10">

                                <select class="form-control" id="provincia" name ="provincia" required>
                                    <option value="0">Seleccione:</option>
                                    <?php
 $conn=conexion();
$query = "select id,provincia from tbl_provincia";

    

$sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

$total = mysqli_num_rows($sql);

$i = 0;

while ($vals = mysqli_fetch_array($sql)) {

    echo '<option value="'.$vals['id'].'">'.$vals['provincia'].'</option>';
}
     
        ?>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Ciudad</label>
                            <div class="col-sm-10">

                                <select class="form-control" id="ciudad" name="ciudad" required>
                                    <option value="0">Seleccione:</option>
        
                                </select>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Celular</label>
                            <div class="col-sm-10">
                                <input type="input" class="form-control"  maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" name="num_representante"  name="celular" required>
                            </div>
                        </div>





                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Representante</label>
                            <div class="col-sm-10">
                                <input type="input" class="form-control" name="representante"  required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Celular Representante</label>
                            <div class="col-sm-10">
                                <input type="input"  pattern="[0-9]{0,13}"  maxlength="10" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" name="num_representante" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">E-mail</label>
                            <div class="col-sm-10">
                                <input type="email" pattern="^[A-Z0-9._%+-]+@(?:[A-Z0-9-]+\.)+[A-Z]{2,}$" class="form-control" name="correo" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Unidad Educativa- Estudios Secundarios</label>
                            <div class="col-sm-10">
                                <input type="input" class="form-control" name="estudios" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Talla Uniforme</label>
                            <div class="col-sm-10">
                                <input type="input" class="form-control"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" name="num_representante"  name="talla" required>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Numero de Calzado</label>
                            <div class="col-sm-10">
                                <input type="input" class="form-control"  onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" class="form-control" name="num_representante"  name="calzado" required>
                            </div>
                        </div>


                       
                        
                        <button type="submit" class="btn btn-success enviar">Enviar</button>

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








<script>



const categoria = document.getElementById('institucion');
const producto = document.getElementById('curso');

categoria.addEventListener('change', function() {
  const idCategoria = categoria.value;
  if (idCategoria !== '') {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', `php/negocios/cursos/verCurso.php?id_institucion=${idCategoria}`, true);
    xhr.onload = function() {
      if (this.status === 200) {
        const productos = JSON.parse(this.responseText);
        console.log(productos);

        let arregloDeClavesYValores = Object.entries(productos  );
        console.log("Claves y valores: ", arregloDeClavesYValores[3][1]);
        let options = '<option value="">Selecciona un curso</option>';
        arregloDeClavesYValores[3][1].forEach(function(producto) {
          options += `<option value="${producto.id_curso}">${producto.nombre_curso}</option>`;
        });
        producto.innerHTML = options;
      }
    };
    xhr.send();
  } else {
    producto.innerHTML = '<option value="">Selecciona un producto</option>';
  }
});



const provincia = document.getElementById('provincia');
const ciudad = document.getElementById('ciudad');

provincia.addEventListener('change', function() {
  const idprovincia = provincia.value;
  if (idprovincia !== '') {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', `php/negocios/ciudad/verCiudad.php?id_provincia=${idprovincia}`, true);
    xhr.onload = function() {
      if (this.status === 200) {
        const productos = JSON.parse(this.responseText);
        console.log(productos);

        let arregloDeClavesYValores = Object.entries(productos);
        console.log("Claves y valores: ", arregloDeClavesYValores[3][1]);
        let options = '<option value="">Selecciona una ciudad</option>';
        arregloDeClavesYValores[3][1].forEach(function(ciudad) {
          options += `<option value="${ciudad.id_ciudad}">${ciudad.nombre_ciudad}</option>`;
        });
        ciudad.innerHTML = options;
      }
    };
    xhr.send();
  } else {
    producto.innerHTML = '<option value="">Selecciona un producto</option>';
  }
});






</script>




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