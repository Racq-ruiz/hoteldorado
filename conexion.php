<?php
$server="localhost";
$username="root";
$password="";
$db='hotel';

$con = new mysqli($server, $username, $password, $db);

if ($con->connect_errno){
	echo "No conectado";
} 
?>