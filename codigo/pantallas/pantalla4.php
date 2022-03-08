<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maravillosa Jugada</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body id="pantalla4">
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
    }
    
   
?>
<div id="particles-js"></div>
<section class="row">

    <div class="column1"><h1>Maravillosa Jugada</h1></div>

</section>

<section class="row">
    <div class="column9"></div>
    <div class="column1"><h3 id="Explicacion">Jugando tanto con las blancas como las negras, averigua las 5 jugadas a hacer en total para que las negras ganen la partida. (EMPIEZAN NEGRAS)</h3></div>
    <div class="column9"></div>
</section>
<section class="row">
    <div class="column9"></div>
    <div class="column7"><h2>Piezas</h2><img src="../descargas/img/Ajedrez/Piezas.jpg" alt="" id="piezas"><h3 id="Nombre_Piezas">peón---torre----caballo---alfil-----reina------rey</h3></div>
    
    <?php
    $ficha =["alfil","reina","alfil","reina","reina"];
    $casilla =['b4','d2','c3','c3','c1'];

    if (!isset($_POST["jugada"])){
        $jugada=0;
       
    }else {
        $jugada=($_POST["jugada"]);
    }

    if (!isset($_POST["ficha"])){
        $ruta="../descargas/img/Ajedrez/Jugada".$jugada.'.PNG'; 
        echo '<div class="column8"><img src="'.$ruta.'" alt="" id="Img_Jugada"></div>';
    }else if ($_POST["ficha"]==$ficha[$jugada] && $_POST["casilla"]==$casilla[$jugada] && $jugada!=4){ 
        $img=$jugada+1;
        $ruta="../descargas/img/Ajedrez/Jugada".$img.'.PNG'; 
        echo '<div class="column8"><img src="'.$ruta.'" alt="" id="Img_Jugada"></div>';
        $jugada++;
        $fallo="";

     }elseif ($_POST["ficha"]==$ficha[$jugada] && $_POST["casilla"]==$casilla[$jugada] && $jugada==4) {
        session_start(); 
        $_SESSION['pantalla4']='check'; 
         header("Location: ../pantallas/pantalla5.php");
     }  else {
        $fallo='La respuesta es incorrecta';
        $img=$jugada;
        $ruta="../descargas/img/Ajedrez/Jugada".$img.'.PNG'; 
        echo '<div class="column8"><img src="'.$ruta.'" alt="" id="Img_Jugada"></div>';
    }
    ?>
    <div class="column7"><h2 class="TextoEjemplo">Ejemplo</h2><h1 id="Ejemplo" class="TextoPeon">peón  h6</h1></div>
    <div class="column9"></div>
</section>


<section class="row">
    <div class="column1">

    <form action="pantalla4.php" method="post">
        <input type="text" name="ficha" placeholder="Inserte Ficha">
        <input type="text" name="casilla" placeholder="Inserte casilla">
        <input type="hidden" name="jugada" value="<?php echo $jugada?>">
        <input type="submit" name="enviar" value="enviar">
       
    </form>
 <?php 
        if (isset($_POST["ficha"]) && ($_POST["ficha"]!=$ficha[$jugada]) && ($_POST["casilla"]!=$casilla[$jugada])){
            echo "<p style = 'color: white;'>$fallo</p>";
        }
        ?>
 
    </div>

</section>
<script src="../descargas/particulas.js/particles.js-master/particles.js"></script>
<script src="../descargas/particulas.js/nasa.js"></script>
</body>
</html>