<?php
echo "<form id='form1' name='form1' method='post' action='index.php'><input type='text' name='text' id ='text'/><input type='submit' name='generar' id ='generar' value='generar'/></form>";
$output = $_POST['text'];
echo "<img src='qr_img.php?d=$output'>";

?>