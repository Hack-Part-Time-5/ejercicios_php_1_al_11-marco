<!-- Crear un programa que sume los primeros 10 números. -->


<?php
// primero creamos un contenedor para ir almacenando la suma
$resultado = 0;
// Despues recorremos los numero del 1 al 10
for ($i=1; $i <= 10; $i++) { 
    // ahora sumamos el tercer numero + el resultado de sumar el primero con el segundo y asi en adelante
    echo("i es igual a $i y resultado vale $resultado, Sumando i: $i + resultado: $resultado, ");
    // Ahora agregamos a resultado el resultado de la suma y lo vamos acumulando.
    $resultado += $i;
    echo("El resultado actual es $resultado").PHP_EOL;
};
?>