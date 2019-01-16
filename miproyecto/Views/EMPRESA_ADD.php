<?php

class ACCION_ADD{
    function __construct(){

        $this->render();
    }

    function render(){
        include 'Header.php';
        ?>
        <br>
    <form name="añadirbol" enctype="multipart/form-data" action='../Controllers/Empresa_Controller.php?action=ADD' method='post'>
    <fieldset>
      <legend><?= $strings['Añadir boleto']?></legend>
      <label for="nombreEmpresa"><?= $strings['Nombre empresa']?></label>
      <input type="text" name="nombreEmpresa" id="nombreEmpresa" size="60" maxlength="60" required="required">


      <input class="btn" type='submit' name='action' value='<?= $strings['AÑADIR']?>' onclick="return comprobarADD()">

      <a class="btnvolv" href='../Controllers/Empresa_Controller.php'>
					<p><?= $strings['Volver']?></p> </a>

    </fieldset>
  </form>


<?php
  include '../Views/Footer.php';
    }
}



?>