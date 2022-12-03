<!-- Crear una función que dado un número x imprima solo los valores impares. -->

<?php
function impares(){
    for ($i=0; $i < 50 ; $i++) { 
        if ($i %2 !== 0) {
            echo("$i ");
        }
    }
}

impares();

?>