<!--Jorge Perez Robles 30/11/2018 en esta vista vamos a mandar los mensajes pertinentes ademas de indicar
a que carpeta ir con el boton volver-->
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

		include '../Locales/Strings_'.$_SESSION['idioma'].'.php';
		include '../Views/Header.php';
?>
		<br>
		<br>
		<br>
		<p>
		<H3>
<p class="trozo"><?php		
		echo $strings[$this->string];
?>
</p>
		</H3>
		</p>
		<br>
		<br>
		<br>

<?php

		echo '<a class ="volver" href=\'' . $this->volver . "'><p>" . $strings['Volver'] . "</p> </a>";
		include '../Views/Footer.php';
	} //fin metodo render

}