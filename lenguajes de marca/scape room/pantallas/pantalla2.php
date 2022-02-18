<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>enigma</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body id="pantalla2">
    <h1>ENIGMA</h1>
    <p>Puede devorar todas las cosas: plantas, bestias, flores y aves. Roe el hierro y muerde acero, mata reyes, arruina ciudades y puede derribar las altas montañas.</p>
    <form action="../proc/proc.php" method="POST">
        <input type="text" name='enigma'>
        <input type="submit" name="cp2">
    </form>
    <?php
    if (isset($_GET['msg']) and $_GET['msg']==4) {
       echo "<p>respuesta incorrecta, intentalo de nuevo</p>";
    }
    ?>
</body>
</html>