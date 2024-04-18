<?php
 
 if(isset($_POST['ingresar'])){
    $usuario = $_POST['usuario'];
     if($usuario == 'roberto'){
        echo "es correcto"
     else
        echo "no es correcto"
    }
  }
?>
