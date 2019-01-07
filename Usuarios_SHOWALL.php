
<?php
class Usuarios_SHOWALL{

var $datos;
var $enlace;
function __construct($datos,$enlace){

	$this -> enlace=$enlace;
	$this -> datos= $datos;
	$this ->mostrar();

}
function mostrar(){
		include_once "../Views/cabecera.php";
	?>



<article id="showall" class="datagrid">

<table >

<tr>
	<th class="centrado" colspan="4"><?php echo $GLOBALS['strings']['Lista de usuarios'];?></th>
	<td><form action="../Controllers/Usuarios_Controller.php"
	method="POST"><button name="action" value="SEARCH"><i class="fas fa-glasses"></i></button>
	</form></td>
	<td><form action="../Controllers/Usuarios_Controller.php"
	method="POST"><button name="action" value="ADD"><i class="fas fa-plus"></i></button>
	</form></td>
</tr>
<tr>
<th>Login</th>
	<th><?php echo $GLOBALS['strings']['Contraseña'];?></th>
<th><?php echo $GLOBALS['strings']['DNI'];?></th>
<th><?php echo $GLOBALS['strings']['Nombre'];?></th>
<th><?php echo $GLOBALS['strings']['Apellidos'];?></th>
<th><?php echo $GLOBALS['strings']['Telefono'];?></th>
<th><?php echo $GLOBALS['strings']['Email'];?></th>
<th><?php echo $GLOBALS['strings']['Tipo de usuario'];?></th>
<th></th>
	<th></th>
<th></th>

</tr>
<?php
if(! is_string($this->datos)){
while($fila = $this->datos->fetch_row()){

echo "<tr>";
for ($i=0;$i<count($fila);$i++){
echo "<td>".$fila[$i]."</td>";


}

?>

<td><form action="../Controllers/Usuarios_Controller.php"
	method="POST">
	<input type="hidden" name="login" value="<?php echo $fila[0]; ?>" >
	<input type="hidden" name="DNI" value="<?php echo $fila[2]; ?>" >
	<input type="hidden" name="email" value="<?php echo $fila[6]; ?>" >
	<button name="action" value="EDIT"> <i class="fas fa-pencil-alt"></i></button></form></td>

	<td><form action="../Controllers/Usuarios_Controller.php"
	method="POST">
	<input type="hidden" name="login" value="<?php echo $fila[0]; ?>" >
	<input type="hidden" name="DNI" value="<?php echo $fila[2]; ?>" >
	<input type="hidden" name="email" value="<?php echo $fila[6]; ?>" >
	<button name="action" value="DELETE"><i class="fas fa-eraser"></i> </button></td>
	<td><form action="../Controllers/Usuarios_Controller.php"
	method="POST">
	<input type="hidden" name="login" value="<?php echo $fila[0]; ?>" >
	<input type="hidden" name="DNI" value="<?php echo $fila[2]; ?>" >
	<input type="hidden" name="email" value="<?php echo $fila[6]; ?>" >
	<button name="action" value="SHOWCURRENT"><i class="fas fa-glasses"></i></button></form></td>

</tr>
<?php
}
}
?>
</table>
<?php
 if($this->enlace != ''){
echo '<a href=\'' . $this->enlace . "'>" . "<button class='volver'><i class='fas fa-backward'></i> </button></a>";
}
?>

</article>
<br><br>
<hr>

<?php
include_once "../Views/footer.php";
}}
?>
