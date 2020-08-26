<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Hotel el Dorado</title>
	<link rel="stylesheet"  href="estilos.css">
</head>

<body class="hidden">
	<div class="centrado" id="onload">
	    <div class="lds-ripple"><div></div><div></div></div>
	</div>
	<header>
		<nav id="nav" class="nav1">
			<div class="contenedor-nav">
				<div class="logo">
					<img src="Img/Logo.png" alt="">
			    </div>
				<div class="enlaces" id="enlaces">
					<a href="#" id="enlace-inicio" class="btn-header" >Inicio</a>
					<a href="#" id="enlace-experiencia" class="btn-header">Experiencia</a>
					<a href="#" id="enlace-servicios" class="btn-header">Servicios</a>
					<a href="#" id="enlace-resorts" class="btn-header">Nuestros Resorts</a>
					<a href="#" id="enlace-contacto" class="btn-header">Contacto</a>
					<?php
session_start();
$Usuario = $_SESSION['username'];

if (!isset($Usuario)) {
	header("location: logica/login.php");
}else {
	echo "<a href='logica/salir.php'> Salir </a>";
}

?>
				</div>

				<div class="icono" id="open">
					<span>&#9776;</span>
				</div>
			</div>
		 </nav>
		 
		<div class="textos">
			<h1>EL DORADO</h1>
			<h2>CARIVE MEXICANO</h2>
			<h3>MI DESTINO FAVORITO</h3>
		</div>
	</header>
	<main>
		<section class="team contenedor" id="experiencia">
		<h3>NO SON SOLO RESORTS. SON EXPERIENCIAS.</h3>
		<p class="after">Experiencias Mexicanas</p>
		<div class="card">
			<div class="content-card">
			    <div class="secciones">
				    <img src="Img/Lujo.jpg" alt="">
			    </div>
			    <div class="texto-team">
				    <h4>LUJO MEXICANO</h4>
				    <P>AUTÉNTICO</P>
			    </div>	
		    </div>
		    <div class="content-card">
			     <div class="secciones">
				      <img src="Img/Experiencia.jpg" alt="">
			     </div>
			     <div class="texto-team">
				     <h4>EXPERIENCIA</h4>
				     <P>GOURMET</P>
			     </div>
		     </div>
		     <div class="content-card">
			      <div class="secciones">
				     <img src="Img/Romance.jpg" alt="">
			      </div>
			      <div class="texto-team">
				      <h4>ROMANCE</h4>
				      <P>SOLO PARA ADULTOS</P>
			      </div>
		     </div>
		  </div>
	    </section>
		<section class="about" id="servicioss">
			<div class="contenedor">
				<h3>Nuestros Servicios</h3>
				<p class="after"> Lujo insuperable que no te debes perder </p>
				<div class="servicioss">
					<div class="caja-servicios">
						<img src="Img/Casa.png" alt="">
						<h4>Decoracion mexicana</h4>
						<p>autentica</p>
					</div>
					<div class="caja-servicios">
						<img src="Img/Canoa.png" alt="">
						<h4>Actividades</h4>
						<p>acuaticas y terrestres</p>
					</div>
					<div class="caja-servicios">
						<img src="Img/Sol.png" alt="">
						<h4>Playas privadas</h4>
						<p>de gran extension</p>
					</div>
					<div class="caja-servicios">
						<img src="Img/Plato.png" alt="">
						<h4>Restaurantes gourmet</h4>
						<p>a la carta</p>
					</div>
					<div class="caja-servicios">
						<img src="Img/Bebida.png" alt="">
						<h4>Bares</h4>
						<p>con bebidas premiun</p>
					</div>
					<div class="caja-servicios">
						<img src="Img/Servicio.png" alt="">
						<h4>Servicio a la habitacion</h4>
						<p>las 24 horas</p>
					</div>
					<div class="caja-servicios">
						<img src="Img/Snork.png" alt="">
						<h4>Programa de entrenamiento</h4>
						<p>diumo y nocturno</p>
					</div>
					<div class="caja-servicios">
						<img src="Img/Piscina.png" alt="">
						<h4>Suites</h4>
						<p>con piscina privada</p>
					</div>
					<div class="caja-servicios">
						<img src="Img/Cama.png" alt="">
						<h4>Menu de almohadas</h4>
						<p>a tu gusto</p>
					</div>
				</div>
			</div>
		</section>
		<section class="work contenedor" id="resorts">
			<h3>EXPLORA NUESTROS RESORTS</h3>
			<p class="after">DE LUJO MEXICANO</p>
			<div class="botones-work">
				<ul>
					<li class="filter" data-nombre='todos'>TODOS</li>
					<li class="filter" data-nombre='maroma'>MAROMA</li>
					<li class="filter" data-nombre='suites'>SUITES</li>
					<li class="filter" data-nombre='royale'>ROYALE</li>
				</ul>
			</div>
			<div class="galeria-work">
				<div class="cont-work maroma">
					<div class="img-work">
						<img src="Img/maroma1.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>MAROMA</h4>
					</div>
				</div>
				<div class="cont-work maroma">
					<div class="img-work">
						<img src="Img/maroma5.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>MAROMA</h4>
					</div>
				</div>
				<div class="cont-work maroma">
					<div class="img-work">
						<img src="Img/maroma9.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>MAROMA</h4>
					</div>
				</div>
				<div class="cont-work maroma">
					<div class="img-work">
						<img src="Img/maroma12.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>MAROMA</h4>
					</div>
				</div>
				<div class="cont-work maroma">
					<div class="img-work">
						<img src="Img/maroma13.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>MAROMA</h4>
					</div>
				</div>
				<div class="cont-work maroma">
					<div class="img-work">
						<img src="Img/maroma14.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>MAROMA</h4>
					</div>
				</div>
				<div class="cont-work maroma">
					<div class="img-work">
						<img src="Img/maroma15.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>MAROMA</h4>
					</div>
				</div>
				<div class="cont-work maroma">
					<div class="img-work">
						<img src="Img/maroma16.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>MAROMA</h4>
					</div>
				</div>
				<div class="cont-work suites">
					<div class="img-work">
						<img src="Img/suites4.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>SUITES</h4>
					</div>
				</div>
				<div class="cont-work suites">
					<div class="img-work">
						<img src="Img/suites7.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>SUITES</h4>
					</div>
				</div>
				<div class="cont-work suites">
					<div class="img-work">
						<img src="Img/suites9.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>SUITES</h4>
					</div>
				</div>
				<div class="cont-work suites">
					<div class="img-work">
						<img src="Img/suites10.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>SUITES</h4>
					</div>
				</div>
				<div class="cont-work suites">
					<div class="img-work">
						<img src="Img/suites14.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>SUITES</h4>
					</div>
				</div>
				<div class="cont-work suites">
					<div class="img-work">
						<img src="Img/suites15.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>SUITES</h4>
					</div>
				</div>
				<div class="cont-work suites">
					<div class="img-work">
						<img src="Img/suites16.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>SUITES</h4>
					</div>
				</div>
				<div class="cont-work suites">
					<div class="img-work">
						<img src="Img/suites17.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>SUITES</h4>
					</div>
				</div>
				<div class="cont-work royale">
					<div class="img-work">
						<img src="Img/royale2.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>ROYALE</h4>
					</div>
				</div>
				<div class="cont-work royale">
					<div class="img-work">
						<img src="Img/royale7.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>ROYALE</h4>
					</div>
				</div>
				<div class="cont-work royale">
					<div class="img-work">
						<img src="Img/royale8.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>ROYALE</h4>
					</div>
				</div>
				<div class="cont-work royale">
					<div class="img-work">
						<img src="Img/royale9.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>ROYALE</h4>
					</div>
				</div>
				<div class="cont-work royale">
					<div class="img-work">
						<img src="Img/royale10.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>ROYALE</h4>
					</div>
				</div>
				<div class="cont-work royale">
					<div class="img-work">
						<img src="Img/royale11.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>ROYALE</h4>
					</div>
				</div>
				<div class="cont-work royale">
					<div class="img-work">
						<img src="Img/royale12.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>ROYALE</h4>
					</div>
				</div>
				<div class="cont-work royale">
					<div class="img-work">
						<img src="Img/royale16.jpg" alt="">
					</div>
					<div class="textos-work">
						<h4>ROYALE</h4>
					</div>
				</div>
			</div>
		</section>
	</main>


	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Reservar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hacer reservacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="POST" action="insreservar.php">
      <div class="modal-body">
        <label for="Nombre_Apellido">Nombre y Apellido:</label><br><br>
    <input type="text" id="Nombre_Apellido"><br><br>
    <label for="Personas">Personas:</label><br>
    <input type="number" id="Personas"><br><br>
    <label for="Habitaciones">Habitaciones:</label><br>
    <input type="number" id="Habitaciones"><br><br>
    <label>Fecha de llegada</label><br>
    <input type="date" id="Fecha_de_llegada"><br><br>
    <label>Fecha de salida</label><br>
    <input type="date" id="Fecha_de_salida"><br><br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="registro" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>

<?php
require "conexion.php";
?>

<table class="table order-table table-bordered">
  <thead>
    <tr style="background: rgb(219, 144, .5); font-size: 20px;"><th colspan="9" class="text-center">Registro</th></tr>
    <tr style="background: #d6cfce">
      <th>Idpersona</th>
      <th>Nombre y Apellido</th>
      <th>Personas</th>
      <th>Habitaciones</th>
      <th>Fecha de llegada</th>
      <th>Fecha de salida</th>
      <th style="width:150px">Acciones</th>
    </tr>
  </thead>
  <tr>

    <?php

    $t = 0;
    $a = 1;

    $sql1 = mysqli_query($con, "SELECT * from reservar order by Nombre_Apellido asc");
    while ($filas1 = mysqli_fetch_array($sql1)) {
      
      $t  += $a;

     echo " <tr>
             <td>".$t."</td>
             <td>".$filas1['Nombre_Apellido']."</td>
             <td>".$filas1['Personas']."</td>
             <td>".$filas1['Habitaciones']."</td>
             <td>".$filas1['Fecha_de_llegada']."</td>
             <td>".$filas1['Fecha_de_salida']."</td>
             <td>
              <button class='btn btn-warning btn-sm' data-toggle='modal' data-target='#mod".$filas1['Idpersona']."'>Editar</button>
              <button class='btn btn-danger btn-sm delprod' data-id='".$filas1['Idpersona']."'>Eliminar</button>
             </td>
            </tr> 
                ";

            echo '<!--Modal-->
            <div class="modal fade" id="mod'.$filas1['Idpersona'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar Reservacion</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>

            <form method"POST" action"insreservar.php">

            <div class="modal-body">
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre y Apellido*</label>
            <input type="text" class="form-control" name="nombre_frm" id="recipient-name" value="'.$filas1['Nombre_Apellido'].'">
            <label for="recipient-name" class="col-form-label">Personas*</label>
            <input type="text" class="form-control" name="personas_frm" id="recipient-name" value="'.$filas1['Personas'].'">
            <label for="recipient-name" class="col-form-label">Habitaciones*</label>
            <input type="text" class="form-control" name="habitaciones_frm" id="recipient-name" value="'.$filas1['Habitaciones'].'">
            <label for="recipient-name" class="col-form-label">Fecha de llegada*</label>
            <input type="text" class="form-control" name="fec_frm" id="recipient-name" value="'.$filas1['Fecha_de_llegada'].'">
            <label for="recipient-name" class="col-form-label">Fecha de salida*</label>
            <input type="text" class="form-control" name="fecs_frm" id="recipient-name" value="'.$filas1['Fecha_de_salida'].'">
            </div>

            <div class="col-md-11">
            <input type= "hidden" name="Codrecmd" value="'.$filas1['Idpersona'].'">
            <h5 class="text-center" style="color:red;"> Todos los datos con * son de caracter obligatorio </h5>
            </div>
            </div>
          <div class="modal-footer">
            <button type="button" class=btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="actualiza" class="btn btn-primary">Save</button>
            </div>
            </form>
            </div>
            </div>
            </div>';
          }
          ?>
        </tr>
      </table>
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/metodoeliminar.js"></script>







	<footer id="contacto">
		<div class="footer contenedor">
			<div class="marca-logo">
				<img src="Img/Logo.png" alt="">
			</div>
			<div class="iconos">
				<a  href="https://www.facebook.com/eldoradoresorts?fref=ts"><img src="Iconos/facebook.png" width="3%"></a>
				<a  href="https://twitter.com/ElDoradoResorts"><img src="Iconos/twitter.png" width="3%"></a>
				<a  href="https://www.instagram.com/eldoradoresorts/"><img src="Iconos/instagram.png" width="3%"></a>
			</div
			<p>NOS ESMERAMOS EN CREAR EXPERIENCIAS SORPRENDENTES</p>
		</div>
	</footer>
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
	<script src="js/filtro.js"></script>
</body>
</html>
