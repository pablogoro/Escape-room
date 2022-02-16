<?php
if ($_POST['edad']<18) {
    echo "<p>No puedes ver los datos, eres menor de edad</p>";
} elseif ($_POST['edad']>=18 ) {
    if ($_POST['genero']=='hombre') {
          // mostrar en formato lista no ordenada
     echo "<ul>";
     // mostrar nombre
     echo"<li> SR/ {$_POST['nombre']}</li>"; 
     // mostrar apellido
     echo"<li>{$_POST['apellido']}</li>";
     // mostrat edad
     echo"<li>{$_POST['edad']}</li>";
     echo "<li>";
        if (isset($_POST['futbol'])) {
            echo $_POST['futbol'] ;
            
        }
        if (isset($_POST['cine'])){
            echo " {$_POST['cine']}";
        
    }
     echo"</li>";
     echo"</ul>";
     // viajar a index.php
     echo "<a href='./index.php'>volver formulario</a>";
    }
    elseif ($_POST['genero']=='mujer') {
              // mostrar en formato lista no ordenada
     echo "<ul>";
     // mostrar nombre
     echo"<li> SRA/ {$_POST['nombre']}</li>"; 
     // mostrar apellido
     echo"<li>{$_POST['apellido']}</li>";
     // mostrat edad
     echo"<li>{$_POST['edad']}</li>";
     echo "<li>";
        if (isset($_POST['futbol'])) {
            echo $_POST['futbol'] ;
            
        }
        if (isset($_POST['cine'])){
            echo " {$_POST['cine']}";
        
}
        
     echo"</ul>";
     
     // viajar a index.php
     echo "<a href='./index.php'>volver formulario</a>";
     
        
     }
    }



?>