<?php
class Contratos_SEARCH{

var $enlace;
function __construct($enlace){

	$this -> enlace=$enlace;
	$this ->mostrar();
}
function mostrar(){
	include_once "../Views/cabecera.php";
	?>
<article id="add">
					<h2> <?php echo $GLOBALS['strings']['Buscar contrato'];?> </h2>
<form name="Add" method="post" action="../Controllers/Contratos_Controller.php"
enctype="multipart/form-data">

<label><?php echo $GLOBALS['strings']['Identificador de contrato'];?> </label><input type="text"
 name="idContrato" maxlength="30" size="22"  onblur="comprobarTexto(this,10)">
		<br>
<label><?php echo $GLOBALS['strings']['Importe'];?> </label><input type="text"
   name="importe" maxlength="40" size="30" ><br>
<label><?php echo $GLOBALS['strings']['Fecha final'];?> </label><input type="text" name= "fechaFinal" maxlength="3"
 size="10" >
		<br>
<label><?php echo $GLOBALS['strings']['Documento de contrato'];?> </label> <input type="text"
 name= "docContrato" maxlength="50" size="30">
<br>

<label><?php echo $GLOBALS['strings']['Identificador de centro'] ;?></label>	<input type="text" name="idCentro">



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
