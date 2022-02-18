<?php
    
// boton de comenzar a pantalla 1
    if(isset($_POST['comenzar'])){
        header('Location: ../pantallas/pantalla1.php');
    }

// pantalla 1 a pantalla2
if(isset($_POST['respuesta1']) and strtolower($_POST['respuesta1'])=='no creas que la única realidad es la que puedes ver'){
    header('Location: ../pantallas/pantalla2.php');
} elseif(isset($_POST['respuesta1'])) {
     header('Location: ../pantallas/pantalla1.php?msg=2');
}

// pantalla 2 a pantalla 3
    if(isset($_POST['enigma']) and strtolower($_POST['enigma'])=='tiempo' or strtolower($_POST['enigma'])=='el tiempo'){
        header('Location: ../pantallas/pantalla3.php');
    } elseif (isset($_POST['enigma'])) {
        header('Location: ../pantallas/pantalla2.php?msg=4');
    }

