
<?php
class Visitas_SHOWALL{

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
	<th class="centrado" colspan="4"><?php echo $GLOBALS['strings']['Lista de visitas'];?></th>
	<td><form action="../Controllers/Visitas_Controller.php"
	method="POST"><button name="action" value="SEARCH"><i class="fas fa-glasses"></i></button>
	</form></td>
	<td><form action="../Controllers/Visitas_Controller.php"
	method="POST"><button name="action" value="ADD"><i class="fas fa-plus"></i></button>
	</form></td>
</tr>
<tr>

	<th><?php echo $GLOBALS['strings']['Identificador de visita'];?></th>
<th><?php echo $GLOBALS['strings']['Fecha de inicio'];?></th>
<th><?php echo $GLOBALS['strings']['Fecha de finalizacion'];?></th>
<th><?php echo $GLOBALS['strings']['Estado'];?></th>
<th><?php echo $GLOBALS['strings']['Identificador de centro'];?></th>
<th><?php echo $GLOBALS['strings']['Identificador de contrato'];?></th>

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

<td><form action="../Controllers/Visitas_Controller.php"
	method="POST">
	<input type="hidden" name="idVisita" value="<?php echo $fila[0]; ?>" >

	<button name="action" value="EDIT"> <i class="fas fa-pencil-alt"></i></button></form></td>

	<td><form action="../Controllers/Visitas_Controller.php"
	method="POST">
	<input type="hidden" name="idVisita" value="<?php echo $fila[0]; ?>" >

	<button name="action" value="DELETE"><i class="fas fa-eraser"></i> </button></td>
	<td><form action="../Controllers/Visitas_Controller.php"
	method="POST">
	<input type="hidden" name="idVisita" value="<?php echo $fila[0]; ?>" >

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
