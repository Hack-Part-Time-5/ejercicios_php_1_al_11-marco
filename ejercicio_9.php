<!-- Crear una función que dado un numero imprima solo los valores pares. -->
<?php

function pares() {
    for ($i=0; $i < 50 ; $i++) { 
        if ($i %2 === 0) {
            echo("$i ");
        }
    }
}

pares();

?>