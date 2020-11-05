<?php
include "../conexion/conexion.php";
?>
<!DOCTYPE html>
<html  >
<head>
  <!-- Site made with Mobirise Website Builder v5.0.29, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v5.0.29, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="../assets/images/logo5.png" type="image/x-icon">
  <meta name="description" content="Web Builder Description">
  
  
  <title>Page 1</title>
  <link rel="stylesheet" href="../assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../assets/facebook-plugin/style.css">
  <link rel="stylesheet" href="../assets/tether/tether.min.css">
  <link rel="stylesheet" href="../assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="../assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/theme/css/style.css">
  <link rel="preload" as="style" href="../assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section class="header8 cid-saNnzvL6LR" data-bg-video="https://www.youtube.com/watch?v=36YgDDJ7XSc" id="header8-b">

    

    <div class="mbr-overlay" style="opacity: 0; background-color: rgb(130, 120, 110);">
    </div>

    <div class="container align-center">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center py-2 mbr-bold mbr-fonts-style display-1">
                        NUEVOS REGISTROS DE PERSONAL
                </h1>
                <div class="mbr-section-btn text-center"><a class="btn btn-md btn-primary display-4" href="../index.html">Ir Menú Principal</a></div>
            </div>
        </div>
    </div>
    
</section>

<section class="mbr-section form1 cid-saN1zo7kx0" id="form1-8">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    Ingrese los datos del nuevo personal
                </h2>
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="index.php" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="caAavxIru9kYg7wUvy2QVH9LQcNopvGkSCDuSYnirp6pXtyadVBtXFvFi0NRjKZRM4FXoPwlogylR4rEsmZjYr+3FqX2RVSIIjaJQzBW9v4bnW6Wvt2XNLnN4ETBLB3S">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md-4  form-group" data-for="name">
                            <label for="name-form1-8" class="form-control-label mbr-fonts-style display-7">Paterno</label>
                            <input type="text" name="paterno" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-8" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div>
                        <div class="col-md-4  form-group" data-for="email">
                            <label for="email-form1-8" class="form-control-label mbr-fonts-style display-7">Materno</label>
                            <input type="text" name="materno" data-form-field="Email" required="required" class="form-control display-7" id="email-form1-8" onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-8" class="form-control-label mbr-fonts-style display-7">Nombres</label>
                            <input type="text" name="nombres" data-form-field="Phone" class="form-control display-7" id="phone-form1-8" onkeyup="javascript:this.value=this.value.toUpperCase();" required oninvalid>
                            
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-8" class="form-control-label mbr-fonts-style display-7">Genero</label>
                            <input type="text" name="genero" data-form-field="Phone" class="form-control display-7" id="phone-form1-8" list="items">
                        <datalist id="items">
                        <option >MASCULINO</option>
                        <option >FEMENINO</option>
                        <option >Preferiría no contestar</option>
                        </datalist>
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-8" class="form-control-label mbr-fonts-style display-7">Estado Civil</label>
                            <input type="select" name="estado_civil" data-form-field="Phone" class="form-control display-7" id="phone-form1-8" onkeyup="javascript:this.value=this.value.toUpperCase();" list="itemsC">
                            <datalist id="itemsC">
                        <option >SOLTERO/A</option>
                        <option >CASADO/A</option>
                        <option >DIVORCIADO/A</option>
                        <option >VIUDO/A</option>
                        </datalist>
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-8" class="form-control-label mbr-fonts-style display-7">Carnet de Identidad</label>
                            <input type="text" name="carnet_de_identidad" data-form-field="Phone" class="form-control display-7" id="phone-form1-8" onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-8" class="form-control-label mbr-fonts-style display-7">Fecha de nacimiento</label>
                            <input type="date" name="fecha_de_nacimiento" placeholder="AAA-MM-DD" data-form-field="Phone" class="form-control display-7" id="phone-form1-8">
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-8" class="form-control-label mbr-fonts-style display-7">Teléfono o Celular</label>
                            <input type="number" name="telefono" data-form-field="Phone" class="form-control display-7" id="phone-form1-8" onkeyup="javascript:this.value=this.value.toUpperCase();">
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-8" class="form-control-label mbr-fonts-style display-7">Dirección de su Domicilio</label>
                            <input type="text" name="direccion_de_su_domicilio" data-form-field="Phone" class="form-control display-7" id="phone-form1-8">
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-8" class="form-control-label mbr-fonts-style display-7">Ocupación</label>
                            <input type="text" name="ocupacion" data-form-field="Phone" class="form-control display-7" id="phone-form1-8"  list="itemsO">
                            <datalist id="itemsO">
                        <option >Empleo de medio tiempo</option>
                        <option >Empleo de tiempo completo</option>
                        <option >Desempleado</option>
                        <option >Trabajador por cuenta propia</option>
                        <option >Estudiante</option>
                        <option >Retirado</option>
                        </datalist>
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-8" class="form-control-label mbr-fonts-style display-7">Correo Electrónico</label>
                            <input type="Email" name="correo_electronico" data-form-field="Phone" class="form-control display-7" id="phone-form1-8" required oninvalid>
                        </div>
                        
                        
                        <div class="col-md-12 input-group-btn align-center">
                            <button type="submit" name="boton" class="btn btn-primary btn-form display-4">AGREGAR</button>
                        </div>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>

<?php
    if(isset($_POST["boton"])){
        $paterno = $_POST["paterno"];
        $materno = $_POST["materno"];
        $nombres = $_POST["nombres"];
        $genero  = $_POST["genero"];
        $estado_civil = $_POST["estado_civil"];
        $carnet_de_identidad =$_POST["carnet_de_identidad"];
        $fecha_de_nacimiento =$_POST["fecha_de_nacimiento"];
        $telefono =$_POST["telefono"];
        $direccion_de_su_domicilio=$_POST["direccion_de_su_domicilio"];
        $ocupacion =$_POST["ocupacion"];
        $correo_electronico =$_POST["correo_electronico"];
        
        $insercion = "INSERT INTO personal (paterno,materno,nombres,genero,estado_civil,carnet_de_identidad,fecha_de_nacimiento,telefono,direccion_de_su_domicilio,ocupacion,correo_electronico) 
        VALUES ('$paterno','$materno','$nombres','$genero','$estado_civil','$carnet_de_identidad','$fecha_de_nacimiento','$telefono','$direccion_de_su_domicilio','$ocupacion','$correo_electronico');";
        $ejecutar = $conexion->query($insercion);
    }
$sql = "SELECT * FROM personal;";
$resultado = $conexion->query($sql);
    if (mysqli_num_rows($resultado)>0){
    
?>



<section class="section-table cid-saN1Gce6bh mbr-parallax-background" id="table1-9">

  
  <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(255, 255, 255);">
  </div>
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
          Registro de Personal
      </h2>
      
      <div class="table-wrapper">
        <div class="container">
          
        </div>

        <div class="container scroll">
          <table class="table" cellspacing="0" data-empty="No matching records found">
            <thead>
              <tr class="table-heads ">
                  
                  
                  
                  
              <th class="head-item mbr-fonts-style display-7">
                      NOMBRE COMPLETO</th><th class="head-item mbr-fonts-style display-7">
                      GENERO</th><th class="head-item mbr-fonts-style display-7">
                      ESTADO CIVIL</th><th class="head-item mbr-fonts-style display-7">
                      CARNET DE IDENTIDAD</th><th class="head-item mbr-fonts-style display-7">
                      FECHA DE NACIMIENTO</th><th class="head-item mbr-fonts-style display-7">
                      TELÉFONO</th><th class="head-item mbr-fonts-style display-7">
                      DIRECCIÓN DE SU DOMICILIO</th><th class="head-item mbr-fonts-style display-7">
                      OCUPACION</th><th class="head-item mbr-fonts-style display-7">
                      CORREO ELECTRÓNICO</th>
                      
                      </tr>
            </thead>

            <tbody>
                    
            <tr> 
            
            
            <?php
                    while ($rows = $resultado -> fetch_array()):
            ?>
            <td class="body-item mbr-fonts-style display-7">
                
                <?php
                    echo $rows[1]." ".$rows[2]." ".$rows[3];
                ?>
            </td>
            <td class="body-item mbr-fonts-style display-7">
                
                <?php
                    echo $rows[4];
                ?>
            </td>
            <td class="body-item mbr-fonts-style display-7">
                
                <?php
                    echo $rows[5];
                ?>
            </td>
            <td class="body-item mbr-fonts-style display-7">
                
                <?php
                    echo $rows[6];
                ?>
            </td>
            <td class="body-item mbr-fonts-style display-7">
                
                <?php
                    echo $rows[7];
                ?>
            </td>
            <td class="body-item mbr-fonts-style display-7">
                
                <?php
                    echo $rows[8];
                ?>
            </td>
            <td class="body-item mbr-fonts-style display-7">
                
                <?php
                    echo $rows[9];
                ?>
            </td>
            <td class="body-item mbr-fonts-style display-7">
                
                <?php
                    echo $rows[10];
                ?>
            </td>
            <td class="body-item mbr-fonts-style display-7">
                
                <?php
                    echo $rows[11];
                ?>
            </td>
            
            
            </tr>
            
            <?php
                    endwhile;
                    ?>
            </tbody>
          </table>
        </div>
        <div class="container table-info-container">
          
        </div>
      </div>
    </div>
</section>

    <?php
    }
    $conexion -> close();
    ?>

<section once="footers" class="cid-saMHxCAh7v" id="footer6-4">

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2020 Rodrigo Quispe - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>

  <script src="../assets/web/assets/jquery/jquery.min.js"></script>
  <script src="../assets/popper/popper.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5"></script>
  <script src="../https://apis.google.com/js/plusone.js"></script>
  <script src="../assets/facebook-plugin/facebook-script.js"></script>
  <script src="../assets/tether/tether.min.js"></script>
  <script src="../assets/smoothscroll/smooth-scroll.js"></script>
  <script src="../assets/playervimeo/vimeo_player.js"></script>
  <script src="../assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="../assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="../assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="../assets/datatables/jquery.data-tables.min.js"></script>
  <script src="../assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="../assets/parallax/jarallax.min.js"></script>
  <script src="../assets/theme/js/script.js"></script>
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbr-arrow-up-icon mbr-arrow-up-icon-cm cm-icon cm-icon-smallarrow-up"></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>