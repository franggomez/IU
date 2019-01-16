<?php

class CENTRO_ADD{
    function __construct($empresa){
        $this->empresa = $empresa;
        $this->render();
    }

    function render(){
        include 'Header.php';
        ?>
        <br>
    <form name="añadirbol" enctype="multipart/form-data" action='../Controllers/Centro_Controller.php?action=ADD&nombreEmpresa=<?=$this->empresa?>' method='post'>
    <fieldset>
      <legend><?= $strings['Añadir centro']?></legend>
      <label for="idCentro"><?= $strings['id del Centro']?></label>
      <input type="text" name="idCentro" id="idCentro" size="60" maxlength="60" required="required">


      <input class="btn" type='submit' name='action' value='<?= $strings['AÑADIR']?>' onclick="return comprobarADD()">

      <a class="btnvolv" href='../Controllers/Centro_Controller.php?nombreEmpresa=<?=$this->empresa?>'>
					<p><?= $strings['Volver']?></p> </a>

    </fieldset>
  </form>


<?php
  include '../Views/Footer.php';
    }
}



?>