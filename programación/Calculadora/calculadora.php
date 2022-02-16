<?php
// recibir los datos de un formulario
//Si el formulario lo enviamos por el metodo get lo recibimos por la $_GET 
//  Si lo encviamos por el  metodo post lo recibimos $_POST 
// Si enviamos archivos los recibimos por $_FILE 
// Combinación de POST y GET $_REQUEST
// Print () es una función y echo un comando 
  
echo "<link rel='stylesheet' href='./style.css'>";
//Recupero el numero 1
    $Numero1=$_POST['num1'];
//Recupero el numero 2
    $Numero2=$_POST['num2'];

    $mostrarresul=true;
// hago la operación 
   

 $op=$_POST['op'];


//      if($op=='sum'){
//          $resultado=$Numero1+$Numero2;
//     }
//         elseif ($op=='rest'){
//             $resultado=$Numero1-$Numero2;
//         }
//              elseif($op=='mult'){
//                  $resultado=$Numero1*$Numero2;
//              }
//                 else {
//                     if($num2==0){
//                         //avisar de que no se pude hacer eso
//                         echo 'No se puede dividir un número entre cero';
//                         $mostrarresul=false;
//                         echo"<a href='index.html'> Pulsa aqui para volver</a>";

//                     }
//                     else {
//                         $resultado=$Numero1/$Numero2;
//                     }
                   
//                 }
// if($mostrarresul){
//     echo "<br>";
//     echo "El resulatado es: {$resultado}";
//   echo "<br>";
// }

switch ($op) {
    case '1':
        $resultado=$Numero1+$Numero2;
        echo "El resultado de la suma es: $resultado";
        echo "<br/>";
        echo "IMBECIL";
        break;
    case '2':
        $resultado=$Numero1-$Numero2;
        echo " El resultado de la resta es: $resultado";
        echo "<br/>";
        break;
    case '3':
         $resultado=$Numero1*$Numero2;
        echo "El resultado de la multiplicación es: $resultado";
        echo "<br/>";
        break;
    case '4':
        // if ($Numero2!=0) {
        //     $resultado=$Numero1/$Numero2;
        //     echo "El resultado de la resta resta: $resultado";
        //  }else{
        //      header('Location: index.html');
        // }
         
        //  echo "<br/>";
        try {
            $resultado=$Numero1/$Numero2;
            echo "El resultado de la división es $resultado";
        } catch (Throwable $e){
            echo "<script>alert('no puedes dividir por cero')</script>";
            //header('Location: index.html');
            echo "<p><a href='index.html'>volver</a></p>";
        }
        break;
    default:
        echo "has selecionado una opción no valida";
        break;
}




     
// escribo la operació
 
//     var_dump($_POST); //muestar los datos de un arraids, 

//     echo 'El resultado es: $resultado';
//     echo "El resultado es: $resultado";
//     echo 'El resultado es; '.$resultado;
//      echo $_POST;   muestra todo menos arraids
//      echo "<br>";
//    var_dump($_POST); //muestar los datos de un arraids, 

