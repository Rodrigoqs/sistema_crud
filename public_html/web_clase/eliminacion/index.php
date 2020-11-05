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
  <meta name="description" content="Web Page Generator Description">
  
  
  <title>Page 1</title>
  <link rel="stylesheet" href="../assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../assets/facebook-plugin/style.css">
  <link rel="stylesheet" href="../assets/tether/tether.min.css">
  <link rel="stylesheet" href="../assets/theme/css/style.css">
  <link rel="preload" as="style" href="../assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
  
</head>
<body>
  
  <section class="header1 cid-s9uz2Ig8dH mbr-parallax-background" id="header1-1">

    

    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(20, 157, 204);">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">
                    ELIMINACION DE REGISTROS
                </h1>
                
                
                <div class="mbr-section-btn align-center"><a class="btn btn-md btn-secondary display-4" href="../index.html">
                        <span class="mbr-iconfont mbri-file"></span>Ir a Menú Principal</a></div>
            </div>
        </div>
    </div>

</section>

<section class="engine"><a href="https://mobirise.info/j">website templates</a></section><section class="mbr-section form1 cid-s9uz60uYjm" id="form1-2">

    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                    Ingrese el dato a buscar
                </h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                <!---Formbuilder Form--->
                <form action="index.php" method="POST" class="mbr-form form-with-styler" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="JznhPyOtIbT5qJP2++4Kf3yzt6sgaZmsMJqS0KZDJzBSi2bbVDOsanKePcpqiJs+6rCF5mWS98XUqefCkd9Xe988qYL6+aomNddlTf7nANQn9kRObdJQcZdSDDZR700b">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md-12  form-group" data-for="name">
                            <label for="name-form1-2" class="form-control-label mbr-fonts-style display-7">Paterno</label>
                            <input type="text" name="buscar" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-2">
                        </div>
                       
                        <div class="col-md-12 input-group-btn align-center">
                            <button type="submit" name="boton" class="btn btn-primary btn-form display-4">BUSCAR</button>
                        </div>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>

<?php
 if(isset($_POST["boton"])){
 
     $buscar= $_POST["buscar"];
     $sql = "SELECT *FROM personal WHERE paterno LIKE  '%".$buscar."%' ;";
     $ejecutar = $conexion->query($sql);
     if(mysqli_num_rows($ejecutar)>0){
        
?>

<section class="mbr-section article content11 cid-s9uz89DrmD" id="content11-3">
     

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ol>
                    <?php
                        while($rows = $ejecutar->fetch_array()):
                            
                    
                    ?>
       
                    <li><strong>NOMBRE COMPLETO</strong>
                    <?php
                        echo $rows[1]." ".$rows[2]." ".$rows[3];
                     ?>   
                    
                    <div class="mbr-section-btn align-center">
                        <?php
                        echo '<a class="btn btn-md btn-secondary display-4" href="eliminacion.php?cod='.$rows[0].'&paterno='.$rows[1].'&materno='.$rows[2].'&nombres='.$rows[3].'&genero='.$rows[4].'"><span class="mbr-iconfont mbri-edit"></span>ELIMINACION</a></div>';
                        ?>
                    </li>
                    
                    <?php
                        endwhile;
                    ?>
                    
                </ol>
            </div>
        </div>
    </div>
</section>
<?php

     }
 }
$conexion -> close();
?>

<section once="footers" class="cid-s9uzblT6z4" id="footer6-4">


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
  <script src="https://apis.google.com/js/plusone.js"></script>
  <script src="../assets/facebook-plugin/facebook-script.js"></script>
  <script src="../assets/tether/tether.min.js"></script>
  <script src="../assets/smoothscroll/smooth-scroll.js"></script>
  <script src="../assets/parallax/jarallax.min.js"></script>
  <script src="../assets/theme/js/script.js"></script>

  
  
</body>
</html>