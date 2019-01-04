
<?php
class Contratos_DELETE{
var $valores;
var $enlace;
function __construct($valores,$enlace){
	$this ->valores=$valores;
	$this -> enlace=$enlace;
	$this ->mostrar();
}
function mostrar(){
	include_once "../Views/cabecera.php";
	?>









<article id="delete" class="datagrid">


	<table >

	<tr>
		<th class="centrado" colspan="2"> <?php echo $GLOBALS['strings']['Datos detallados'];?></th>
	</tr>

	<tr>
		<th><?php echo $GLOBALS['strings']['Identificador de contrato'];?></th><td><?php echo $this->valores[0];?></td>
	</tr>
	<tr>
		<th><?php echo $GLOBALS['strings']['Importe'];?> </th><td><?php echo $this->valores[1];?></td>
	</tr>
	<tr>
		<th><?php echo $GLOBALS['strings']['Fecha final'];?></th><td><?php echo $this->valores[2];?></td>
	</tr>
	<tr>
		<th><?php echo $GLOBALS['strings']['Documento de contrato'];?></th><td><?php echo $this->valores[3];?></td>
	</tr>
	<tr>
		<th><?php echo $GLOBALS['strings']['Identificador de centro'];?></th><td><?php echo $this->valores[4];?></td>
	</tr>



</table>
<form name="delete" method="post" action="../Controllers/Contratos_Controller.php">
	<input type ="hidden" name="idContrato"  value="<?php echo $this->valores[0];?>">
<button name="action" value="DELETE2" class="boton"> <i class="fas fa-eraser" ></i></button>
<a  href="<?php
echo $this->enlace;?>"><button type="button" class="boton"><i class="fas fa-times"></i></button></a>
</form>
</article>
















<?php
include_once "../Views/footer.php";
}

}
?>
