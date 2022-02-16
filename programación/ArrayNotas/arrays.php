<?php
// Array indexado
$notas=[7,9,8];
$suma=0;
for ($i=0; $i <3; $i++) { 
    $suma=$suma+$notas[$i];
}
echo 'Tu nota media es '.($suma/count($notas));
echo "<br>";
// Array asociativo
$notas2=['SO'=>7,'PRO'=>9,'BD'=>8];
echo 'Tu nota de sistemas es '. $notas2['SO'];
echo "<br>";
echo 'Tu nota de programacion es '. $notas2['PRO'];
echo "<br>";
echo 'Tu nota de bases es '. $notas2['BD'];
echo "<br>";
echo "<br>";
foreach ($notas2 as $minotita) {
    echo $minotita;
    echo "<br>";
}
echo "<br>";
foreach ($notas2 as $clave => $valor) {
    echo " $clave : $valor ";
   
    echo "<br>";
}
$clase=['Jorge'=>['S0'=>9, 'PRO'=>10,'BD'=>2], 'Javi'=>['SO'=>8, 'PRO'=>7,'BD'=>9], 'Pol'=>['SO'=>5, 'PRO'=>9,'BD'=>5]];
// Abro la tabla
echo "<table>";
// primera fila
echo"<tr>";
    // columna de cabecera
    echo"<th>Nombre alumno</th>";
    echo"<th>SO</th>";
    echo"<th>PRO</th>";
    echo"<th>BD</th>";
    echo"<th>MEDIA</th>";
echo"</tr>";
// cierro la primera fila

foreach ($clase as $nombre=>$asignaturas) {
    echo "<tr><td>$nombre</td>";
    // var_dump($asignaturas);
    $sum=0;
    $nota_alt=0;

    foreach ($asignaturas as $nota) {
        echo "<td>$nota</td>";
        $sum=$sum + $nota;
        if ($nota>$nota_alta) {
            $nota_alta=$nota;
        }
    }
    $media=round($sum/count($asignaturas), 2);
    echo "<td>$media</td>";
echo "</tr>";

}
echo "</table>";
echo "<br>";
echo "La nota más alta a sido ".$nota_alta; 

// cierro la tabla