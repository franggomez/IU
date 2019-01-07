<?php
class Centros_SEARCH{
var $enlace;
function __construct($enlace){

	$this -> enlace=$enlace;
	$this ->mostrar();
}
function mostrar(){
	include_once "../Views/cabecera.php";
	?>
<article id="add">
					<h2> <?php echo $GLOBALS['strings']['Buscar centro'];?> </h2>
<form name="Add" method="post" action="../Controllers/Centros_Controller.php"
>
<label><?php echo $GLOBALS['strings']['Identificador de centro'] ;?></label><input type="text"
name= "idCentro" maxlength="60" size="60" required >
						<br>
<label><?php echo $GLOBALS['strings']['Nombre de la empresa'] ;?></label>	<input type="text" name="nombreEmpresa">
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
