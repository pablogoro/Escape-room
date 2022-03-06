<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/style.css">

</head>

<body id="pantalla5">
    <div id="tsparticles"></div>

    <?php
    $min=1;
    $max=5;
    $rand=random_int( $min, $max);
    echo $rand;
    $llave=0;
    $random=0;
  
    ?>
    <div id="particles-js"></div>

        <div class="row">
            <div class="column1 candado">
                <img class="img1" src="../descargas/img/candado.png" alt="">
            </div>
        </div>
        <div class="row llaves ">
            <div class="column1">
                <div class="columnImg llave1">
                    <img src="../descargas/img/llave.png" alt="">
                    <form action="./pantalla5.php" method="post">
                        <input type="submit" name="llave" value="1">
                        <input type="hidden" value="<?php echo $rand ?>" name="random">
                    </form>
                </div>
                <div class="columnImg llave2">
                    <img src="../descargas/img/llave.png" alt="">
                    <form action="./pantalla5.php" method="post">
                        <input type="submit" name="llave" value="2">
                        <input type="hidden" value="<?php echo $rand ?>" name="random">
                    </form>
                </div>
                <div class="columnImg llave3">
                    <img src="../descargas/img/llave.png" alt="">
                    <form action="./pantalla5.php" method="post">
                        <input type="submit" name="llave" value="3">
                        <input type="hidden" value="<?php echo $rand ?>" name="random">
                    </form>
                </div>
                <div class="columnImg llave4">
                    <img src="../descargas/img/llave.png" alt="">
                    <form action="./pantalla5.php" method="post">
                        <input type="submit" name="llave" value="4">
                        <input type="hidden" value="<?php echo $rand ?>" name="random">
                    </form>
                </div>
                <div class="columnImg llave5">
                    <img src="../descargas/img/llave.png" alt="">
                    <form action="./pantalla5.php" method="post">
                        <input type="submit" name="llave" value="5">
                        <input type="hidden" value="<?php echo $rand ?>" name="random">
                    </form>
                </div>
            </div>


        </div>

        <?php
if (isset($_POST['llave']) & $_POST['llave']==$_POST['random']) {
    header('Location: ../pantallas/pantalla6.php');
}
?>
<script src="../descargas/particulas.js/particles.js-master/particles.js"></script>
<script src="../descargas/particulas.js/nasa.js"></script>
</body>

</html>