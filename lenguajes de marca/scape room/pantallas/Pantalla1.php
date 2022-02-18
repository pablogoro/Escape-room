<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palabras Ocultas</title>
    <!-- Hoja de Estilos -->
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body id="Pantalla1">
    <section class="row">
        <div class="column4"> </div>
        <div class="column6"> <h1>Palabras Ocultas</h1></div>
        <div class="column4"></div>
    </section>
    
    <section class="row">
        <div class="column4"></div>
        
        <div class="column6"><h3>Para de esta pantalla escapar, el mensaje oculto escrito en estos textos tendrás que averiguar</h3></div>
        <div class="column4"></div>

    </section>

    <section class="row">
        <div class="column4"><p class="textos"></p></div>
        <div class="column3"><p class="textos"><h4>1</h4></p></div>
        <div class="column4"><p class="textos"></p></div>
        <div class="column3"><p class="textos"><h4>2</h4></p></div>
        <div class="column4"><p class="textos"></p></div>    
    </section>

    
    <section class="row">
        <div class="column4"><p class="textos"></p> </div>
        <div class="column3"><p class="textos" class="textos2">Como os contamos en nuestro último a<b>r</b>tículo los scape rooms nacen originariamente del mundo de los videoju<b>e</b>gos, y tras una larga historia de adaptación y cambios se han con<b>v</b>ertido en la opción preferida por muchos para disfrutar en familia, con amigos e incluso con los compañeros de trabajo. Y es que las salas de escape proporcionan al usuario una experiencia totalmente inmer<b>s</b>iva en la que durante un máximo de tiempo de una hora deberá poner a prueba sus habilidad<b>e</b>s y capacidad de atención para superar <b>d</b>iversas pruebas que le permitan r<b>e</b>solver los entresijos de <b>u</b>na emocionante historia para lograr escapar a tiem<b>p</b>o de la sala.</p></div>
        <div class="column4"><p class="textos"></p></div>
        <div class="column3"><p class="textos" class="textos3">A lo largo del juego de escape los integrantes del equipo deben cooperar y encontrar todas las pistas necesarias para avanzar, y tienen la posibilidad d<b>e</b> solicitar ayuda al game máster (la persona encargada de controlar la evolución del juego y prestar ay<b>u</b>da a los participantes en caso de <b>q</b>ue la necesiten) que guiará sus pasos hacia la siguiente pista. Una vez los jugadores comience a poner sobre la mes<b>a</b> todos los rompecabezas disponibles y desarrollar sus conjeturas, e<b>l</b>aborarán una estrategia que determinará su éxito para escapar a tiempo y resolver el mi<b>s</b>terio tras la historia con la que iniciaron <b>e</b>sta aventura.</p></div>
        <div class="column4"><p class="textos"></p></div>    
    </section>

    <section class="row">
        <div class="column4"><p class="textos"></p></div>
        <div class="column3"><p class="textos"><h4>3</h4></p></div>
        <div class="column4"><p class="textos"></p></div>
        <div class="column3"><p class="textos"><h4>4</h4></p></div>
        <div class="column4"><p class="textos"></p></div>    
    </section>


    <section class="row">
        <div class="column4"><p class="textos"></p> </div>
        <div class="column3"><p class="textos" class="textos2">Como podrás imaginar el objetivo de estos juegos es <b>d</b>oble. Por una parte los equipos deben trat<b>a</b>r de resolver los interrogantes planteados por el argumento <b>d</b>e cada juego para resolver el m<b>i</b>sterio de la sa<b>l</b>a. Y, por otra parte, deberán lograr superar todas l<b>a</b>s pruebas y enigmas exist<b>e</b>ntes en menos de una ho<b>r</b>a. Estas dos característic<b>a</b>s son comunes en la gran mayoría de juegos de es<b>c</b>ape en vivo, y marcan las reglas de esta exper<b>i</b>encia que cada vez llama la ate<b>n</b>ción de un mayor n<b>ú</b>mero de personas alrededor del mundo. </p></div>
        <div class="column4"><p class="textos"></p></div>
        <div class="column3"><p class="textos" class="textos3">Actualmente es posible encontrar diversos tipos de escape rooms, con diferentes historias y m<b>e</b>cánicas de juego, enfocadas en diferentes públicos y con mayor o menor ambientación, así como con <b>u</b>na mayor cantidad de prueba conformadas por distintas clases de pruebas, desde los clásicos candados hasta juegos de luces y mecanismos electrónicos ocultos tras los objetos más cotidianos <b>q</b>ue pudiera<b>s</b> imaginar. La elección del escape room ide<b>a</b>l dependerá siempre del tipo d<b>e</b> jugadores que participen, del nivel de expe<b>r</b>iencia de <b>c</b>ada uno, así com<b>o</b> de las preferencias perso<b>n</b>ales de usuario.</p></div>
        <div class="column4"><p class="textos"></p></div> 
        
    </section>

    <form action="../proc/proc.php" method="post">
        <input type="text" name="respuesta1" placeholder="Inserte el mensaje oculto">
        <input type="submit" name="enviar" value="enviar">
        <?php
         if (isset($_GET['msg']) and $_GET['msg']==2) {
         echo "<p>respuesta incorrecta, intentalo de nuevo</p>";
    }
    ?>
    </form>

    

</body>
</html>