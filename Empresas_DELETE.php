
<?php
class Empresas_DELETE{
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
		<th><?php echo $GLOBALS['strings']['Nombre de la empresa'];?></th><td><?php echo $this->valores[0];?></td>
	</tr>



</table>
<form name="delete" method="post" action="../Controllers/Empresas_Controller.php">
	<input type ="hidden" name="nombreEmpresa"  value="<?php echo $this->valores[0];?>">
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
