<!-- Crear un programa que imprima X números random. -->

<?php
for ($i=0; $i < 6; $i++) { 
    $arr = [];
    $arr = random_int(1, 20);
    echo("$arr  ");
}

// Otra manera de encontrar numeros aleatorios.
/* $aleatorio = mt_rand(1,15);
echo($aleatorio); */

?>