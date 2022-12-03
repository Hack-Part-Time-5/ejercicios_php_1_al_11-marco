<!-- Encapsular en funciones los ejercicios 5 y 6. -->


<?php
// Ejercicio 5
function suma (){
    $result = 0;
    
    for ($i=1; $i <= 10; $i++) { 
        echo("i es igual a $i y resultado vale $result, Sumando i: $i + resultado: $result, ");
        $result += $i;
        echo("El resultado actual es $result").PHP_EOL;
    }
}

suma();
?>




<?php
// Ejercicio 6

function random () {
    for ($i=0; $i < 6; $i++) { 
    $arr = [];
    $arr = random_int(1, 20);
    echo("$arr  ");
}
}

random()


?>