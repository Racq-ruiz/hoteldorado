<?php
    require "conexion.php";
  if($_POST['Caso']=="EliminarPr"){
      $id = $_POST['Id'];
      $log = mysqli_query($con, "DELETE FROM reservar WHERE Idpersona = '".$id."'"); 
  }
?>