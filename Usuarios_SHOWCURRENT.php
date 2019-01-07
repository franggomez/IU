
<?php
class Usuarios_SHOWCURRENT{
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
		<th>Login</th><td><?php echo $this->valores[0];?></td>
	</tr>
	<tr>
		<th><?php echo $GLOBALS['strings']['Contraseña'];?></th><td><?php echo $this->valores[1];?></td>
	</tr>
	<tr>
		<th><?php echo $GLOBALS['strings']['DNI'];?> </th><td><?php echo $this->valores[2];?></td>
	</tr>
	<tr>
		<th><?php echo $GLOBALS['strings']['Nombre'];?></th><td><?php echo $this->valores[3];?></td>
	</tr>
	<tr>
		<th><?php echo $GLOBALS['strings']['Apellidos'];?></th><td><?php echo $this->valores[4];?></td>
	</tr>
	<tr>
		<th><?php echo $GLOBALS['strings']['Telefono'];?></th><td><?php echo $this->valores[5];?></td>
	</tr>
	<tr>
		<th><?php echo $GLOBALS['strings']['Email'];?></th><td> <?php echo $this->valores[6];?></td>
	</tr>
	<tr>
		<th><?php echo $GLOBALS['strings']['Tipo de usuario'];?></th><td><?php echo $this->valores[7];?></td>
	</tr>


</table>
<form name="delete" method="post" action="../Controllers/Usuarios_Controller.php">

<a  href="<?php
echo $this->enlace;?>"><button type="button" class="boton"><i class="fas fa-times"></i></button></a>
</form>
</article>
















<?php
include_once "../Views/footer.php";
}

}
?>
