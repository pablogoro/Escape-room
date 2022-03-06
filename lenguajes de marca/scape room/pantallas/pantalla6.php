<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sopa de Letras</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body id="pantalla6" >
<div id="particles-js"></div>
<section class="row">
    <div class="column1">
    <h1>Sopa de Letras</h1>
    </div>
</section>
<section class="row">
    <div class="column1">
    <h3>Para superar la ultima pantalla, has de encontrar las 8 palabras ocultas en la sopa de letra y colocarlas en orden alfabético</h3>
    <h3>Pista: Informática</h3>
    </div>
</section>
<section class="row">
    <div class="column1">
        <div><img src="../descargas/img/SopaLetras/tablero.png" alt="" class="tablero"></div>

    </div>
</section>

<form action="../proc/proc.php" method="post">
    <section class="row">
    <div  class="respuestas" class="column1" >
    <input type="text" name="respuesta1" placeholder="Inserte la palabra 1">
    <input type="text" name="respuesta2" placeholder="Inserte la palabra 2">
    </div>
    </section>

    <section class="row" >
    <div  class="respuestas" class="column1">
    <input type="text" name="respuesta3" placeholder="Inserte la palabra 3">
    <input type="text" name="respuesta4" placeholder="Inserte la palabra 4">
    </div>
    </section>

    <section class="row">
    <div  class="respuestas" class="column1" >
    <input type="text" name="respuesta5" placeholder="Inserte la palabra 5">
    <input type="text" name="respuesta6" placeholder="Inserte la palabra 6">
    </div>
    </section>

    <section class="row">
    <div class="respuestas" class="column1" >
    <input type="text" name="respuesta7" placeholder="Inserte la palabra 7">
    <input type="text" name="respuesta8" placeholder="Inserte la palabra 8">
    </div>
    </section>


    <section class="row">
    <div class="respuestas" class="column1" >
    <input type="submit" name="enviar" value="enviar">
    <?php
        if (isset($_GET['msg']) and $_GET['msg']==2) {
         echo "<p style='color:white;'>respuesta incorrecta, intentalo de nuevo</p>";
    }
    ?>  
    </div>  
    </section>

   
</form>    
<script src="../descargas/particulas.js/particles.js-master/particles.js"></script>
<script src="../descargas/particulas.js/default.js"></script>
</body>
</html>    
