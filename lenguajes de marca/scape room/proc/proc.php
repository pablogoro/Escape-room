<?php
    
// boton de comenzar a pantalla 1
    if(isset($_POST['comenzar'])){
        header('Location: ../pantallas/pantalla1.php');
    }

// pantalla 1 a pantalla2
if(isset($_POST['solucion1']) and strtolower($_POST['solucion1'])=='no creas que la única realidad es la que puedes ver'){
    session_start();
    $_SESSION['pantalla1']=='check';
    header('Location: ../pantallas/pantalla2.php');

} else if(isset($_POST['solucion1'])) {
     header('Location: ../pantallas/pantalla1.php?msg=2');
}

if((isset($_SESSION['pantala1']) && isset($_POST['enigma']) && strtolower($_POST['enigma'])=='tiempo') || (isset($_POST['pantalla1']) && isset($_POST['enigma']) && strtolower($_POST['enigma'])=='el tiempo')){
    session_start(); 
    $_SESSION['pantalla2']='check'; 
    header('Location: ../pantallas/pantalla3.php');
    
} else if (isset($_SESSION['pantalla1']) && isset($_POST['enigma'])) {
    header('Location: ../pantallas/pantalla2.php?msg=4');
}



// pantalla 2 a pantalla 3

// logica 3 pantalla 4

 if (isset($_POST['pantalla2']) && isset($_POST['paciencia']) && strtolower($_POST['paciencia'])=='no tengas demasiada prisa pero tampoco mucha paciencia'){
            header('Location: ../pantallas/pantalla4.php');
     } else if (isset($_POST['paciencia'])) {
            header('Location: ../pantallas/pantalla3.php?msg=8');
        }



// pantalla 6 a final
if(isset($_POST['respuesta1'])&&($_POST['respuesta2'])&&($_POST['respuesta3'])&&($_POST['respuesta4'])&&($_POST['respuesta5'])&&($_POST['respuesta6'])&&($_POST['respuesta7'])&&($_POST['respuesta8']) && strtolower($_POST['respuesta1'])=='antivirus' && strtolower($_POST['respuesta2'])=='dominio' && strtolower($_POST['respuesta3'])=='encriptar' && strtolower($_POST['respuesta4'])=='firewall' && strtolower($_POST['respuesta5'])=='hardware' && strtolower($_POST['respuesta6'])=='ordenador' && strtolower($_POST['respuesta7'])=='router' && strtolower($_POST['respuesta8'])=='software'){

    header('Location: ../pantallas/pantallaFinal.php');

} elseif(isset($_POST['respuesta1'])) {
    header('Location: ../pantallas/pantalla6.php?msg=2');

}




