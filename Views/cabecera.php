
<!--Este archivo se usa para la estructura de la página web para la Entrega1.
Autor:Manuel Varela Díaz.
Fecha:17 de octubre de 2018.
-->
<?php
if (!isset($_SESSION['idioma'])) {
	$_SESSION['idioma'] = 'SPANISH';
	$idioma='SPANISH';
}
else{
	$idioma=$_SESSION['idioma'];

}

include_once '../Locales/Strings_' . $idioma . '.php';
include_once '../Functions/Authentication.php';
?>
<html lang="es">

	<head>
		<title>E.T.3</title>
		<link rel="stylesheet" href="../Views/css/estilos.css" type="text/css" />
		<script type="text/javascript" src="../Views/js/funciones.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	</head>
	<body>
		<header>
				<h1><?php echo $GLOBALS['strings']['Loterías y apuestas del Estado'];?><br> </h1>
				<h1><?php echo $GLOBALS['strings']['Página oficial.'];?>.</h1>
				<img src="../Views/images/loterias.jpg" style="width:200px";float:left></img>
				<?php
				if(IsAuthenticated()){
					?>
			<h4 id="id"><?php echo $GLOBALS['strings']['Estás identificado como']." ".$_SESSION["login"];?></h4>
			<?php
		}
		else{?>

				<h4 id="id"><?php echo $GLOBALS['strings']['Aún no estas identificado'];?></h4>
<?php
		}
	?>
	<form name="desconectarse" action="../Functions/Desconectar.php" method="post">

	<button><i class="fas fa-adjust" name="desconectar" value="Desconectar" ></i></button>
</form>
			<form name='idiomaform' action="../Functions/CambioIdioma.php" method="post">

			<input type="image" src="../Views/images/inglesb.jpg" style="width:65px;float:right" class ="boton" >
			<input type ="hidden" name="idioma" value="ENGLISH">
				</form>
				<form name='idiomaform' action="../Functions/CambioIdioma.php" method="post">
			<input type="image" src="../Views/images/espanol.png" style="width:65px;float:right" class ="boton" >
			<input type ="hidden" name="idioma" value="SPANISH">
			</form>
			<form name='idiomaform' action="../Functions/CambioIdioma.php" method="post">
		<input type="image" src="../Views/images/gal.jpg" style="width:65px;float:right" class ="boton" >
		<input type ="hidden" name="idioma" value="GALLAECIAN">
		</form>
		</header>

		<nav id="menu">
		<ul>
		  <li><a href="#"><?php echo $GLOBALS['strings']['Bonoloto'];?> </a></li>
		  <li><a href="#"><?php echo $GLOBALS['strings']['Megaruleta'];?></a>
			<ul>
			  <li><a href="#"><?php echo $GLOBALS['strings']['Online'];?></a></li>
			  <li><a href="#"> <?php echo $GLOBALS['strings']['En sala'];?></a></li>
			  <li><a href="#"> <?php echo $GLOBALS['strings']['Ruleta americana'];?></a></li>
			</ul>
		  </li>
		  <li><a href="#"><?php echo $GLOBALS['strings']['Joker'];?></a></li>
		  <li><a href="#"><?php echo $GLOBALS['strings']['Premios'];?></a>
			<ul>
			  <li><a href="#"><?php echo $GLOBALS['strings']['Al contado'];?></a></li>
			  <li><a href="#"><?php echo $GLOBALS['strings']['Consulta de boletos'];?></a></li>
			  <li><a href="#"><?php echo $GLOBALS['strings']['Cobro en oficina'];?></a></li>
			</ul>
		  </li>
		  <li><a href="#"><?php echo $GLOBALS['strings']['Dudas'];?></a></li>
		</ul>
		</nav>
