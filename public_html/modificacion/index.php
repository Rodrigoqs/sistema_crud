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
  <meta name="description" content="">
  
  
  <title>Buscar Registro</title>
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
  
  <section class="header1 cid-sb9Os3cs6P mbr-parallax-background" id="header1-0">

    

    <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(228, 210, 149);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">MODIFICACIÓN DE REGISTROS</h1>
                
                
                <div class="mbr-section-btn align-center"><a class="btn btn-md btn-danger display-7" href="../"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>
                        Ir a Menú Principal</a></div>
            </div>
        </div>
    </div>

</section>

<section class="engine"><a href="https://mobirise.info/b">how to create your own website</a></section><section class="mbr-section form3 cid-sb9OQ07kwK mbr-parallax-background" id="form3-2">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(239, 239, 239);">
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="align-center pb-2 mbr-fonts-style display-2">
                    Ingrese el dato a Buscar
                </h2>
                
            </div>
        </div>

        <div class="row py-2 justify-content-center">
            <div class="col-12 col-lg-6  col-md-8 " data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="index.php" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="1BedUvlCkW5KQ38CLtCOOoHuDOsh8UKOY5ftSXTFFK5ZewUQWD5Hs04FybBIF1iNXkiqThh0UWjjl6aVLrPQ6b29KpNjLJtKQiC3WjWrFfTZDBeE6Z5BUt8d1XjtoeiM">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="form-group col" data-for="email">
                            <input type="text" name="buscar" placeholder="nombres y/o apellidos." data-form-field="Name" required="required" class="form-control display-7" id="email-form3-2">
                        </div>
                        <div class="col-auto input-group-btn"><button type="submit" name="boton" class="btn btn-primary-outline display-4"><span class="mbri-update mbr-iconfont mbr-iconfont-btn"></span>BUSCAR</button></div>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>

<?php
 if(isset($_POST["boton"])){
 
     $buscar= $_POST["buscar"];
     $sql = "SELECT *FROM personal WHERE paterno LIKE '%".$buscar."%' or materno LIKE '%".$buscar."%' or nombres LIKE '%".$buscar."%' ;";
     $ejecutar = $conexion->query($sql);
     if(mysqli_num_rows($ejecutar)>0){
?>
<section class="section-table cid-sb9OVqOdur mbr-parallax-background" id="table1-4">

  
  <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(206, 191, 175);">
  </div>
  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">
          Resultado(s) 
      </h2>
      <h3 class="mbr-section-subtitle pb-5 align-center mbr-fonts-style display-5">Si no lo encuentra busca con Carnet de identidad o correo... </h3>
      
      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Buscar:</label>
                  <input class="form-control input-sm" disabled="">
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
                    while ($rows = $ejecutar -> fetch_array()):
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
            
            </tr>
            
            <?php
                    endwhile;
                    ?>
              </tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Mostrando</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">registro(s).</span>
                <span class="infoFilteredBefore">(filtrado de</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> registros totales)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
        </div>
      </div>
    </div>
</section>

<?php

     }
 }
 
$conexion -> close();
?>

<section once="footers" class="cid-sba03Kn9q9" id="footer6-5">

    

    

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