<?php
class Empresas_EDIT{
var $datos;
var $enlace;
function __construct($datos,$enlace){
$this -> datos=$datos;
	$this -> enlace=$enlace;
	$this ->mostrar();
}
function mostrar(){
	include_once "../Views/cabecera.php";
	?>
<article id="add">
					<h2> <?php echo $GLOBALS['strings']['Editar empresa'];?> </h2>
<form name="Add" method="post" action="../Controllers/Empresas_Controller.php"
>

<label><?php echo $GLOBALS['strings']['Nombre de empresa'];?> </label><input type="text" readonly
value= "<?php echo $this->datos[0];?>" name="nombreEmpresa" maxlength="30" size="22" required onblur="comprobarTexto(this,10)">
		<br>

<button type="submit" class="boton" name="action" value="EDIT"><i class="fas fa-pencil"></i></button>
<a href="<?php echo $this->enlace;?>"><button type="button" class="boton"><i class="fas fa-times"></i></button></a>



					</form>
					</article>
					<hr>
<?php
include_once "../Views/footer.php";
}

}
?>
