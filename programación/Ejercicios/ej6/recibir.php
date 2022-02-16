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
     echo"<li>";
    
     switch ($_POST['categoria']) {
         case 'alumno':
             echo "alumno ";
             break;
         case 'profesor':
             echo "profesor ";
            break;
         case 'personal administrativo':
             echo "personal administrativo";
             break;
         case "mantenimiento":
             echo "mantenimiento";
             break;
         
             
         
     } 
     echo"</li>";
     echo "<li> {$_POST['comentario']}</li>";
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
    echo "<br>";
    echo"<li>";
    
    switch ($_POST['categoria']) {
        case 'alumno':
            echo "alumno ";
            break;
        case 'profesor':
            echo "profesor ";
           break;
        case 'personal administrativo':
            echo "personal administrativo";
            break;
        case "mantenimiento":
            echo "mantenimiento";
            break;
        
            
        
    } 
    echo "</li>";
    echo "<li> {$_POST['comentario']}</li>";
        
     echo"</ul>";
     
     // viajar a index.php
     echo "<a href='./index.php'>volver formulario</a>";
     
        
     }
    }



?>