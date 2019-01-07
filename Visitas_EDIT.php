<?php
class Visitas_EDIT{
var $centros;
var $contratos;
var $enlace;
var $datos;
function __construct($datos,$centros,$contratos,$enlace){

	$this -> centros=$centros;
		$this -> contratos=$contratos;
			$this -> enlace=$enlace;
			$this -> datos=$datos;
	$this ->mostrar();
}
function mostrar(){
	include_once "../Views/cabecera.php";
	?>
<article id="add">
					<h2> <?php echo $GLOBALS['strings']['Editar visita'];?> </h2>
<form name="Add" method="post" action="../Controllers/Visitas_Controller.php"
>

<label><?php echo $GLOBALS['strings']['Identificador de visita'];?> </label><input type="text"
readonly  name="idVisita" maxlength="30" size="22"
value= "<?php echo $this->datos[0];?>" required onblur="comprobarTexto(this,10)">
		<br>
		<label><?php echo $GLOBALS['strings']['Fecha de Inicio'];?> </label><input type="date"
		value= "<?php echo $this->datos[1];?>" name="fechInicio" maxlength="40" size="30" required><br>
		<label><?php echo $GLOBALS['strings']['Fecha de finalización'];?> </label><input type="date"
		value= "<?php echo $this->datos[2];?>" name= "fechFin" maxlength="3" size="10" required>
				<br>
				<label><?php echo $GLOBALS['strings']['Estado'];?></label> <br><input type="radio"
			 <?php
			 if($this->datos[3]=="REALIZADA"){
			 	echo 'checked';
			 }


			  ?>
			   name="estado" value="REALIZADA" >
			 				<?php echo $GLOBALS['strings']['REALIZADA'];?> <input type="radio" name="estado"
			 <?php
			 				if($this->datos[3]=="NO REALIZADA"){
			 					echo 'checked';
			 				}
			 ?>

			 				value="NO REALIZADA" checked><?php echo $GLOBALS['strings']['NO REALIZADA'];?><br>
			 				<?php echo $GLOBALS['strings']['REALIZADA'];?> <input type="radio" name="estado" value="NO REALIZADA" checked><?php echo $GLOBALS['strings']['NO REALIZADA'];?><br>
							<label><?php echo $GLOBALS['strings']['Identificador de centro'] ;?></label>	<SELECT name="idCentro">

								<?php
							while($fila=$this->centros->fetch_array()){
								 echo "<option value='$fila[0]'";
								 if($fila[0]==$this->datos[4]){
									 echo "SELECTED";
								 }
								 echo ">$fila[0]</option>" ;
							 }?>
						 </SELECT><br>
							<label><?php echo $GLOBALS['strings']['Identificador de contrato'] ;?></label>	<SELECT name="idContrato">

								<?php
							while($fila=$this->contratos->fetch_array()){
								 echo "<option value='$fila[0]'";
								 if($fila[0]==$this->datos[5]){
									 echo "SELECTED";
								 }
								 echo ">$fila[0]</option>" ;
							 }?>
						 </SELECT><br>
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
