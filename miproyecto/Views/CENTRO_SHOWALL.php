
<?php

class SHOWALLCENTRO{

    function __construct($datos,$empresa){
        //aqui le pasamos los datos de la tabla showall
        $this->datos = $datos;
        $this->empresa = $empresa;
        $this->render();
    }


    function render(){
        include '../Views/Header.php';
        $lista = array($strings['idCentro']);

?>
<div class="tabla">
    <caption>Centros</caption>
</div>
    <table id="tableForm">
        <thead>
           <?php foreach($lista as $titulo){ ?>
               <th><?=$titulo?></th>
          <?php } ?>
                <th><button><a href="../Controllers/Centro_Controller.php?action=ADD&nombreEmpresa=<?=$this->empresa?>">añadir</a></button>
                    
                </th>
        </thead>
        <tbody>
            
                
                    <?php foreach($this->datos as $centro){ ?>
                        <tr>
                        <td><?=$centro->getidCentro()?></td>
                        <td><button><a href="../Controllers/Centro_Controller.php?idCentro=<?=$centro->getidCentro()?>">contratos</a></button></td>
                        </tr>

                   <?php } ?>
            
           
        </tbody>
        <td><button><a href="../Controllers/Empresa_Controller.php">volver</a></td>
    </table> 





     <?php 
    include '../Views/Footer.php'; 
    }
}



?>