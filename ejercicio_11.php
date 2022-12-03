<!-- Considerando las funciones de antes (pares e impares), crear
una función que tenga como limite un numero dado n y como
segundo parámetro un valor booleano que: si es true imprime
los pares y si es false imprime los impares. -->


<?php

function parImpar ($limitNum, $boolean){

    // Si boolean es true tengo que imprimir los numeros pares hasta el limitNum.
    if ($boolean === True) {
        // imprimir los numeros pares de 0 hasta limitNum.
        for ($i=0; $i <= $limitNum; $i++) { 
            if ($i %2 === 0) {
                echo("$i ");
            }
        }
    }if($boolean === False) {
        // imprimir los numeros impares de 0 hasta limitNum.
        for ($i=0; $i < $limitNum; $i++) { 
            if ($i %2 !== 0) {
                echo("$i ");
            }
        }
    }
}

parImpar(50, False)
?>