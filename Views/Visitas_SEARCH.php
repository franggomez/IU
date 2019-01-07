<?php
class Visitas_SEARCH{

var $enlace;
function __construct($enlace){


			$this -> enlace=$enlace;
	$this ->mostrar();
}
function mostrar(){
	include_once "../Views/cabecera.php";
	?>
<article id="add">
					<h2> <?php echo $GLOBALS['strings']['Buscar visita'];?> </h2>
<form name="Add" method="post" action="../Controllers/Visitas_Controller.php"
>

<label><?php echo $GLOBALS['strings']['Identificador de visita'];?> </label><input type="text"
 name="idVisita" maxlength="30" size="22" >
		<br>
		<label><?php echo $GLOBALS['strings']['Fecha de Inicio'];?> </label><input type="text"
		 name="fechInicio" maxlength="40" size="30" ><br>
		<label><?php echo $GLOBALS['strings']['Fecha de finalización'];?> </label><input type="text"
		name= "fechFin" maxlength="3" size="10" >
				<br>
				<label><?php echo $GLOBALS['strings']['Estado'];?></label> <br><input type="text" name="estado" ><br>
							<label><?php echo $GLOBALS['strings']['Identificador de centro'] ;?></label>	<input type="text"
							name="idCentro"><br>
							<label><?php echo $GLOBALS['strings']['Identificador de contrato'] ;?></label>	<input
							type="text" name="idContrato">

							<br>
<button type="submit" class="boton" name="action" value="SEARCH"><i class="fas fa-glasses"></i></button>
<a href="<?php echo $this->enlace;?>"><button type="button" class="boton"><i class="fas fa-times"></i></button></a>



					</form>
					</article>
					<hr>
<?php
include_once "../Views/footer.php";
}

}
?>
