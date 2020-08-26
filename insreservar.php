<?php
require "conexion.php";

if (isset($_POST['registro'])){
	$nom= $_POST['nombre_frm'];
	$per= $_POST['personas_frm'];
	$hab= $_POST['habitaciones_frm'];
	$fec= $_POST['fec_frm'];
	$fecs= $_POST['fecs_frm'];

	$log2 = mysqli_query($con, "INSERT INTO reservar VALUES(NULL, '$nom', '$per', '$hab', '$fec', '$fecs')");

	if ($log2==true){
		echo '<script>window.location="index.php";</script>';
	}else {
		echo '<script>alert("Error al registrar");</script>';
		echo '<script>window.history.go(-1);</script>';
	}
}
if (isset($_POST['actualiza'])){
	$nom=$_POST['nombre_frm'];
	$idProd=$_POST['Codrecmd'];

	$log3=mysqli_query($con, "UPDATE reservar SET nombre='$nom' WHERE Idpersona='$idProd'");
	if($log3==true){
		echo'<script>window.location="index.php";</script>';
	}else{
		echo '<script>alert("Error al Actualizar intenta de nuevo");</script>';
		echo '<script>window.history.go(-1);</script>';
	}
}
if (isset($_POST['actualiza'])){
	$per=$_POST['personas_frm'];
	$idProd=$_POST['Codrecmd'];

	$log3=mysqli_query($pre, "UPDATE productos SET nombre='$per' WHERE Idpersona='$idProd'");
	if($log3==true){
		echo'<script>window.location="index.php";</script>';
	}else{
		echo '<script>alert("Error al Actualizar intenta de nuevo");</script>';
		echo '<script>window.history.go(-1);</script>';
	}
}
if (isset($_POST['actualiza'])){
	$hab=$_POST['habitaciones_frm'];
	$idProd=$_POST['Codrecmd'];

	$log3=mysqli_query($des, "UPDATE productos SET nombre='$hab' WHERE Idpersona='$idProd'");
	if($log3==true){
		echo'<script>window.location="index.php";</script>';
	}else{
		echo '<script>alert("Error al Actualizar intenta de nuevo");</script>';
		echo '<script>window.history.go(-1);</script>';
	}
}
if (isset($_POST['actualiza'])){
	$fec=$_POST['fec_frm'];
	$idProd=$_POST['Codrecmd'];

	$log3=mysqli_query($exis, "UPDATE productos SET nombre='$fec' WHERE Idpersona='$idProd'");
	if($log3==true){
		echo'<script>window.location="index.php";</script>';
	}else{
		echo '<script>alert("Error al Actualizar intenta de nuevo");</script>';
		echo '<script>window.history.go(-1);</script>';
	}
}
if (isset($_POST['actualiza'])){
	$fecs=$_POST['fecs_frm'];
	$idProd=$_POST['Codrecmd'];

	$log3=mysqli_query($fec, "UPDATE productos SET nombre='$fecs' WHERE Idpersona='$idProd'");
	if($log3==true){
		echo'<script>window.location="index.php";</script>';
	}else{
		echo '<script>alert("Error al Actualizar intenta de nuevo");</script>';
		echo '<script>window.history.go(-1);</script>';
	}
}

?>