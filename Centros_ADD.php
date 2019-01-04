<?php
class Centros_ADD{
var $empresas;
var $enlace;
function __construct($empresas,$enlace){
$this ->empresas=$empresas;
	$this -> enlace=$enlace;
	$this ->mostrar();
}
function mostrar(){
	include_once "../Views/cabecera.php";
	?>
<article id="add">
					<h2> <?php echo $GLOBALS['strings']['Añadir centro'];?> </h2>
<form name="Add" method="post" action="../Controllers/Centros_Controller.php"
>
<label><?php echo $GLOBALS['strings']['Identificador de centro'] ;?></label><input type="text" name= "idCentro" maxlength="60" size="60" required onblur= "comprobarVacio(this);comprobarReal(this,3,20,40)">
						<br>
<label><?php echo $GLOBALS['strings']['Nombre de la empresa'] ;?></label>	<SELECT name="nombreEmpresa">

	<?php
while($fila=$this->empresas->fetch_array()){
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
