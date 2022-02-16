<?php
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
?>