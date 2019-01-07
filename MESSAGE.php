<?php

class MESSAGE{

	private $string;
	private $volver;

	function __construct($string, $volver){
		$this->string = $string;
		$this->volver = $volver;
		$this->render();
	}

	function render(){

		//include '../Locale/Strings_'.$_SESSION['idioma'].'.php';
		include '../Views/cabecera.php';
?>
		<br>
		<br>
		<br>
		<p>
		<H3>
<?php
		//echo $strings[$this->string];
		echo $this ->string;
?>
		</H3>
		</p>
		<br>
		<br>
		<br>

<?php

		echo '<a href=\'' . $this->volver . "'>" . "<button class='volver'><i class='fas fa-backward'></i> </button></a>";
		include '../Views/footer.php';
	} //fin metodo render

}
