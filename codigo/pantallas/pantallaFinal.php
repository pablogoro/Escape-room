<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>END</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>
<body id="pantallafinal">
<?php
     session_start();
     if (!isset($_SESSION['pantalla'])) {
         header('Location: ../index.php');
     } elseif (!isset($_SESSION['pantalla1'])) {
         header('Location: ./pantalla1.php');
     }elseif (!isset($_SESSION['pantalla2'])) {
         header('Location: ./pantalla2.php');
     }elseif (!isset($_SESSION['pantalla3'])) {
         header('Location: ./pantalla3.php');
     }elseif (!isset($_SESSION['pantalla4'])) {
        header('Location: ./pantalla4.php');
    }elseif (!isset($_SESSION['pantalla5'])) {
        header('Location: ./pantalla5.php');
    }
    
   
?>
    <audio src="./descargas/Escape Room ambient countdown timer _ Cronómetro de ambientación (256 kbps).mp3" autoplay></audio>

    <section>
        <div class="row" >
            <div class="column1"><div class="borde"><h1>FINAL</h1></div></div>
            
        </div>
        <div class="column1"><H3>By Ricardo D. & Pablo G.</H3></div>
    </section>
        

    
    
</body>
</html>