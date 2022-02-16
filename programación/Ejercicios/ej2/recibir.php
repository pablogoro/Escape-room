<?php
if ($_POST['edad']<18) {
    echo "<p>No puedes ver los datos, eres menor de edad</p>";
} elseif ($_POST['edad']>=18) {
     // mostrar en formato lista no ordenada
     echo "<ul>";
     // mostrar nombre
     echo"<li>{$_POST['nombre']}</li>"; 
     // mostrar apellido
     echo"<li>{$_POST['apellido']}</li>";
     // mostrat edad
     echo"<li>{$_POST['edad']}</li>";
     echo"</ul>";
     // viajar a index.php
     echo "<a href='./index.php'>volver formulario</a>";
}


?>