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
  <link rel="shortcut icon" href="assets/images/logo5.png" type="image/x-icon">
  <meta name="description" content="Website Creator Description">
  
  
  <title>MODIFICAR</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/facebook-plugin/style.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body>
  
  <section class="header1 cid-sba0D2txbV mbr-parallax-background" id="header1-7">

    

    <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(228, 210, 149);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">MODIFICACIÓN DE REGISTROS</h1>
                
                
                <div class="mbr-section-btn align-center"><a class="btn btn-md btn-danger display-7" href="../index.html"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>
                        Ir al menu principal</a></div>
            </div>
        </div>
    </div>
</section>

<section class="engine"><a href="https://mobirise.info/j">website templates</a></section>
 <?php 
               if(!isset($_POST["boton"]) && isset($_GET["cod"])){
                ?>
<section class="mbr-section form1 cid-sba1EJ153c" id="form1-9">
    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(35, 35, 35);">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                    Modifique los registros.
                </h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->
               
                
                <form action="modificacion.php" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="AW1xbs3LQ3QHiEw5B5oM8DoNhd9DxIGWkLYZRukZ7uqBcXYCfoyYhwTvVmYnymhfj0ndZHt+EuOeQx2CA6SZPrxtHM6vrYT/l0mESxSVKTkTVO8SUp/2/k05PAB4rRRT">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md-4  form-group" data-for="name">
                            <label for="name-form1-8" class="form-control-label mbr-fonts-style display-7">Codigo</label>
                            <input type="text" name="co" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-8" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" value=<?php echo $_GET["cod"];?> disabled>
                            <input type="hidden" name="codigo" value=<?php echo $_GET["cod"];?>>
                        </div>
                        <div class="col-md-4  form-group" data-for="name">
                            <label for="name-form1-8" class="form-control-label mbr-fonts-style display-7">Paterno</label>
                            <input type="text" name="paterno" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-8" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();" value=<?php echo $_GET["paterno"];?>>
                        </div>
                        <div class="col-md-4  form-group" data-for="email">
                            <label for="email-form1-8" class="form-control-label mbr-fonts-style display-7">Materno</label>
                            <input type="text" name="materno" data-form-field="Email"  class="form-control display-7" id="email-form1-8" onkeyup="javascript:this.value=this.value.toUpperCase();"  value=<?php echo $_GET["materno"];?>>
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-8" class="form-control-label mbr-fonts-style display-7">Nombres</label>
                            <input type="text" name="nombres" data-form-field="Phone" required="required" class="form-control display-7" id="phone-form1-8" onkeyup="javascript:this.value=this.value.toUpperCase();" required oninvalid value=<?php echo $_GET["nombres"];?>>
                            
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-8" class="form-control-label mbr-fonts-style display-7">Genero</label>
                            <input type="text" name="genero" data-form-field="Phone" class="form-control display-7" id="phone-form1-8" list="items" value=<?php echo $_GET["genero"];?>>
                        <datalist id="items">
                        <option >MASCULINO</option>
                        <option >FEMENINO</option>
                        <option >Preferiría no contestar</option>
                        </datalist>
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-8" class="form-control-label mbr-fonts-style display-7">Estado Civil</label>
                            <input type="select" name="estado_civil" data-form-field="Phone" class="form-control display-7" id="phone-form1-8" onkeyup="javascript:this.value=this.value.toUpperCase();" list="itemsC" value=<?php echo $_GET["estado_civil"];?>>
                            <datalist id="itemsC" >
                        <option >SOLTERO/A</option>
                        <option >CASADO/A</option>
                        <option >DIVORCIADO/A</option>
                        <option >VIUDO/A</option>
                        </datalist>
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-8" class="form-control-label mbr-fonts-style display-7">Carnet de Identidad</label>
                            <input type="text" name="carnet_de_identidad" data-form-field="Phone" class="form-control display-7" id="phone-form1-8" onkeyup="javascript:this.value=this.value.toUpperCase();" value=<?php echo $_GET["carnet_de_identidad"];?>>
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-8" class="form-control-label mbr-fonts-style display-7">Fecha de nacimiento</label>
                            <input type="date" name="fecha_de_nacimiento" placeholder="AAA-MM-DD" data-form-field="Phone" class="form-control display-7" id="phone-form1-8" value=<?php echo $_GET["fecha_de_nacimiento"];?>>
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-8" class="form-control-label mbr-fonts-style display-7">Teléfono o Celular</label>
                            <input type="number" name="telefono" data-form-field="Phone" class="form-control display-7" id="phone-form1-8" onkeyup="javascript:this.value=this.value.toUpperCase();" value=<?php echo $_GET["telefono"];?>>
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-8" class="form-control-label mbr-fonts-style display-7">Dirección</label>
                            <input type="text" name="direccion_de_su_domicilio" data-form-field="Phone" class="form-control display-7" id="phone-form1-8" value=<?php echo $_GET["direccion_de_su_domicilio"];?>>
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-8" class="form-control-label mbr-fonts-style display-7">Ocupación</label>
                            <input type="text" name="ocupacion" data-form-field="Phone" class="form-control display-7" id="phone-form1-8"  list="itemsO" value=<?php echo $_GET["ocupacion"];?>>
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
                            <input type="Email" name="correo_electronico" data-form-field="Phone" class="form-control display-7" id="phone-form1-8" required oninvalid  value=<?php echo $_GET["correo_electronico"];?>>
                        </div>
                        
                        
                        <div class="col-md-12 input-group-btn align-center">
                            <button type="submit" name="boton" class="btn btn-primary btn-form display-4">MODIFICAR</button>
                        </div>
                    </div>
                </form><!---Formbuilder Form--->
                <?php 
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!---mostrar tabla con se modifique--->

<?php
    if(isset($_POST["boton"])){
        $codigo =$_POST["codigo"];
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
        
        $insercion = "UPDATE personal SET paterno='".$paterno."',materno='".$materno."',nombres='".$nombres."',genero='".$genero."', estado_civil='". $estado_civil."',carnet_de_identidad='".$carnet_de_identidad."',fecha_de_nacimiento='".$fecha_de_nacimiento."',telefono='".$telefono."',direccion_de_su_domicilio='".$direccion_de_su_domicilio."',ocupacion='".$ocupacion."',correo_electronico='".$correo_electronico."' WHERE id_personal=".$codigo.";";
        $ejecutar = $conexion->query($insercion);
    
// SELECT * FROM `personal` WHERE `id_personal` = 14 --->
$sql = "SELECT * FROM personal WHERE id_personal = ".$codigo." ;";
$resultado = $conexion->query($sql);
?>

<section class="section-table cid-sb9OVqOdur mbr-parallax-background" id="table1-4">

  
  <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(206, 191, 175);">
  </div>
  <div class="container container-table">
      <h3 class="mbr-section-subtitle pb-5 align-center mbr-fonts-style display-5">Verifique su modificacion </h3>
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0" data-empty="No se encuetra">
            <thead>
              <tr class="table-heads ">

                  <th  style="border: medium transparent" style=" border: inset 0pt">
                       </th>
              <th class="head-item mbr-fonts-style display-7">
                      NOMBRE COMPLETO</th><th class="head-item mbr-fonts-style display-7">
                      GENERO</th><th class="head-item mbr-fonts-style display-7">
                      ESTADO CIVIL</th><th class="head-item mbr-fonts-style display-7">
                      CARNET DE IDENTIDAD</th><th class="head-item mbr-fonts-style display-7">
                      FECHA DE NACIMIENTO</th><th class="head-item mbr-fonts-style display-7">
                      TELÉFONO</th><th class="head-item mbr-fonts-style display-7">
                      DIRECCIÓN DE SU DOMICILIO</th><th class="head-item mbr-fonts-style display-7">
                      OCUPACION</th><th class="head-item mbr-fonts-style display-7">
                      CORREO ELECTRÓNICO</th></tr>
            </thead>

            <tbody>
            <tr> 
            <?php
                    while ($rows = $resultado -> fetch_array()):
            ?>
            <td class="body-item mbr-fonts-style display-7">
                
                <?php
                    echo '<a class=" btn-md btn-secondary display-7" href="modificacion.php?cod='.$rows[0].'&paterno='.$rows[1].'&materno='.$rows[2].'&nombres='.$rows[3].'&genero='.$rows[4].'&estado_civil='.$rows[5].'&carnet_de_identidad='.$rows[6].'&fecha_de_nacimiento='.$rows[7].'&telefono='.$rows[8].'&direccion_de_su_domicilio='.$rows[9].'&ocupacion='.$rows[10].'&correo_electronico='.$rows[11].'"><span class="mbr-iconfont mbri-edit"></span>Modificar</a></div>';
                ?>
            </td>
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
            <?php
                    endwhile;
                    ?>
            </tr>
              </tbody>
          </table>
        </div>
      </div>
    </div>
</section>
<?php

     }
$conexion -> close();
?>


<section once="footers" class="cid-sba03Kn9q9" id="footer6-6">

    

    

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    © Copyright 2025 Rodrigo Quispe - Todos los derechos reservados
                </p>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5"></script>
  <script src="https://apis.google.com/js/plusone.js"></script>
  <script src="assets/facebook-plugin/facebook-script.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/theme/js/script.js"></script>
</body>
</html>