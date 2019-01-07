<?php
class Contratos_ADD{
var $centros;
var $enlace;
function __construct($centros,$enlace){
$this->centros=$centros;
	$this -> enlace=$enlace;
	$this ->mostrar();
}
function mostrar(){
	include_once "../Views/cabecera.php";
	?>
<article id="add">
					<h2> <?php echo $GLOBALS['strings']['Añadir contrato'];?> </h2>
<form name="Add" method="post" action="../Controllers/Contratos_Controller.php"
enctype="multipart/form-data">

<label><?php echo $GLOBALS['strings']['Identificador de contrato'];?> </label><input type="text"  name="idContrato" maxlength="30" size="22" required onblur="comprobarTexto(this,10)">
		<br>
<label><?php echo $GLOBALS['strings']['Importe'];?> </label><input type="text"   name="importe" maxlength="40" size="30" required><br>
<label><?php echo $GLOBALS['strings']['Fecha final'];?> </label><input type="date" name= "fechaFinal" maxlength="3" size="10" required>
		<br>
<label><?php echo $GLOBALS['strings']['Documento de contrato'];?> </label> <input type="file" name= "docContrato" maxlength="50" size="30">
<br>

<label><?php echo $GLOBALS['strings']['Identificador de centro'] ;?></label>	<SELECT name="idCentro">

	<?php
while($fila=$this->centros->fetch_array()){
	 echo "<option value='$fila[0]'>$fila[0]</option>" ;
 }?>
</SELECT>


<button type="submit" class="boton" name="action" value="ADD"><i class="fas fa-plus"></i></button>
<a href="<?php echo $this->enlace;?>"><button type="button" class="boton"><i class="fas fa-times"></i></button></a>



					</form>
					</article>
					<hr>
<?php
include_once "../Views/footer.php";
}

}
?>
