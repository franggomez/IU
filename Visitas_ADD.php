<?php
class Visitas_ADD{
var $centros;
var $contratos;
var $enlace;
function __construct($centros,$contratos,$enlace){

	$this -> centros=$centros;
		$this -> contratos=$contratos;
			$this -> enlace=$enlace;
	$this ->mostrar();
}
function mostrar(){
	include_once "../Views/cabecera.php";
	?>
<article id="add">
					<h2> <?php echo $GLOBALS['strings']['Añadir visita'];?> </h2>
<form name="Add" method="post" action="../Controllers/Visitas_Controller.php"
>

<label><?php echo $GLOBALS['strings']['Identificador de visita'];?> </label><input type="text"  name="idVisita" maxlength="30" size="22" required onblur="comprobarTexto(this,10)">
		<br>
		<label><?php echo $GLOBALS['strings']['Fecha de Inicio'];?> </label><input type="date"   name="fechInicio" maxlength="40" size="30" required><br>
		<label><?php echo $GLOBALS['strings']['Fecha de finalización'];?> </label><input type="date" name= "fechFin" maxlength="3" size="10" required>
				<br>
				<label><?php echo $GLOBALS['strings']['Estado'];?></label> <br><input type="radio" name="estado" value="REALIZADA" >
			 				<?php echo $GLOBALS['strings']['REALIZADA'];?> <input type="radio" name="estado" value="NO REALIZADA" checked><?php echo $GLOBALS['strings']['NO REALIZADA'];?><br>
							<label><?php echo $GLOBALS['strings']['Identificador de centro'] ;?></label>	<SELECT name="idCentro">

								<?php
							while($fila=$this->centros->fetch_array()){
								 echo "<option value='$fila[0]'>$fila[0]</option>" ;
							 }?>
						 </SELECT><br>
							<label><?php echo $GLOBALS['strings']['Identificador de contrato'] ;?></label>	<SELECT name="idContrato">

								<?php
							while($fila=$this->contratos->fetch_array()){
								 echo "<option value='$fila[0]'>$fila[0]</option>" ;
							 }?>
						 </SELECT><br>							
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
