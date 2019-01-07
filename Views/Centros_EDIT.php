<?php
class Centros_EDIT{
var $datos;
var $empresas;
var $enlace;
function __construct($datos,$empresas,$enlace){
$this ->datos=$datos;
$this ->empresas=$empresas;
	$this -> enlace=$enlace;
	$this ->mostrar();
}
function mostrar(){
	include_once "../Views/cabecera.php";
	?>
<article id="add">
					<h2> <?php echo $GLOBALS['strings']['Editar centro'];?> </h2>
<form name="Add" method="post" action="../Controllers/Centros_Controller.php"
>
<label><?php echo $GLOBALS['strings']['Identificador de centro'] ;?></label><input type="text" name= "idCentro"
value= "<?php echo $this->datos[0];?>" maxlength="60" size="60" readonly onblur= "comprobarVacio(this);comprobarReal(this,3,20,40)">
						<br>
<label><?php echo $GLOBALS['strings']['Nombre de la empresa'] ;?></label>	<SELECT name="nombreEmpresa">

	<?php
while($fila=$this->empresas->fetch_array()){
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
