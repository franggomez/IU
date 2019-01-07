
<?php
class Empresas_SHOWCURRENT{
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
	
<a  href="<?php
echo $this->enlace;?>"><button type="button" class="boton"><i class="fas fa-times"></i></button></a>
</form>
</article>
















<?php
include_once "../Views/footer.php";
}

}
?>
