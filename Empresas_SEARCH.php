<?php
class Empresas_SEARCH{

var $enlace;
function __construct($enlace){

	$this -> enlace=$enlace;
	$this ->mostrar();
}
function mostrar(){
	include_once "../Views/cabecera.php";
	?>
<article id="add">
					<h2> <?php echo $GLOBALS['strings']['Buscar empresa'];?> </h2>
<form name="Add" method="post" action="../Controllers/Empresas_Controller.php"
>

<label><?php echo $GLOBALS['strings']['Nombre de empresa'];?> </label><input type="text"
 name="nombreEmpresa" maxlength="30" size="22">
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
