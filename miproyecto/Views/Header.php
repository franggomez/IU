<!--Jorge Perez Robles 30/10/2018-->
<?php
	//comprobamos que este autenticado
	include_once '../Functions/Authentication.php';
	if (!isset($_SESSION['idioma'])) {
		$_SESSION['idioma'] = 'SPANISH';
	}
	else{
	}
	include '../Locales/Strings_' . $_SESSION['idioma'] . '.php';
	
	
	
?>

<html>
<head>
<!-- ponemos el titulo y los links y js y css necesarios -->
	<meta charset="UTF-8">
	<title>
		<?php echo $strings['Loterias']; ?>
	</title>
	<link rel="stylesheet" type="text/css" href="../Views/estilos.css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<script src="../Views/script.js"></script>
</head>
<body>
<header>
	<p style="text-align:center">
		<h1 id="titulo"> <img class="logo" src="../Views/logo.png" alt="Logo">
<?php
			echo $strings['Loterias IU'];
?>
		</h1>
	</p>

	<div>
		<!--creamos el menu horizontal que utilizamos-->
		<ul  id="menu-horizontal">
    		<li><a href="../Controllers/Empresa_Controller.php"class="active"><i class="fas fa-home"></i></a></li>
    		<li><a href="#"><?= $strings['Sobre esto']?></a></li>
    		<li><a href="#"><?= $strings['Servicios']?></a></li>
			<li><a href="#"><?= $strings['Contactos']?></a></li>
		<?php 	if(IsAuthenticated()){ ?>
			<li id="usu"><a href="../Functions/Desconectar.php"><i class="fas fa-sign-out-alt"></i></a></li>
			
			<li id="usu"><a href="#"><i class="fas fa-user"></i></a></li> 
			<?php } ?>
			<li class="especial">
				<?php echo $strings['idioma']; ?>
				<select name="idioma" onchange="location=this.value" autofocus>
					<?php if($_SESSION['idioma'] == 'SPANISH'){ ?>
							<option value="../Functions/CambioIdioma.php?idioma=SPANISH" selected><?php echo $strings['ESPAÑOL']; ?></option>
							<option value="../Functions/CambioIdioma.php?idioma=ENGLISH"><?php echo $strings['INGLES']; ?></option>
							<option value="../Functions/CambioIdioma.php?idioma=GALLAECIAN"><?php echo $strings['GALLEGO']; ?></option>
						<?php	} else if($_SESSION['idioma'] == 'ENGLISH'){ ?>
							<option value="../Functions/CambioIdioma.php?idioma=ENGLISH" selected><?php echo $strings['INGLES']; ?></option>
							<option value="../Functions/CambioIdioma.php?idioma=SPANISH"><?php echo $strings['ESPAÑOL']; ?></option>
							<option value="../Functions/CambioIdioma.php?idioma=GALLAECIAN"><?php echo $strings['GALLEGO']; ?></option>
						<?php	}else{ ?>
							<option value="../Functions/CambioIdioma.php?idioma=ENGLISH"><?php echo $strings['INGLES']; ?></option>
							<option value="../Functions/CambioIdioma.php?idioma=SPANISH"><?php echo $strings['ESPAÑOL']; ?></option>
							<option value="../Functions/CambioIdioma.php?idioma=GALLAECIAN" selected><?php echo $strings['GALLEGO']; ?></option>
						<?php } ?>
				</select>
			</li>
  		</ul>
	</div>
<?php

?>
</header>

<div id = 'main'>
<article>