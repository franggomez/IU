<?php
class Contratos_EDIT{
	var $datos;
var $centros;
var $enlace;
function __construct($datos,$centros,$enlace){
	$this->datos=$datos;
$this->centros=$centros;
	$this -> enlace=$enlace;
	$this ->mostrar();
}
function mostrar(){
	include_once "../Views/cabecera.php";
	?>
<article id="add">
					<h2> <?php echo $GLOBALS['strings']['Editar contrato'];?> </h2>
<form name="Add" method="post" action="../Controllers/Contratos_Controller.php"
enctype="multipart/form-data">

<label><?php echo $GLOBALS['strings']['Identificador de contrato'];?> </label><input type="text" readonly
value= "<?php echo $this->datos[0];?>" name="idContrato" maxlength="30" size="22" required onblur="comprobarTexto(this,10)">
		<br>
<label><?php echo $GLOBALS['strings']['Importe'];?> </label><input type="text"
value= "<?php echo $this->datos[1];?>" name="importe" maxlength="40" size="30" required><br>
<label><?php echo $GLOBALS['strings']['Fecha final'];?> </label><input type="date" name= "fechaFinal"
value= "<?php echo $this->datos[2];?>" maxlength="3" size="10" required>

		<br><label><?php echo $GLOBALS['strings']['Documento de contrato'];?> </label><a
		target="_blank" href="../Files/<?php echo $this->datos[3];?>"><?php echo $this->datos[3];?></a><input type="file"
		name= "docContrato" maxlength="50" size="26">

 	 <input  type="hidden" name="docContratoviejo" value="<?php echo $this->datos[3];?>">
 	<br>

<label><?php echo $GLOBALS['strings']['Identificador de centro'] ;?></label>	<SELECT name="idCentro">

	<?php
while($fila=$this->centros->fetch_array()){
	 echo "<option value='$fila[0]'";
	 if($fila[0]==$this->datos[1]){
		 echo "SELECTED";
	 }
	 echo ">$fila[0]</option>" ;
 }?>
</SELECT>


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
