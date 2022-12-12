<!-- Modificar la función anterior para que pueda comprar todos los
productos posibles.
......
cartera: 0 -->


<!-- ---------------------------------------------------------------------------------------------- -->

<?php

// Crear nuestra cartera con saldo 0.
    $cartera = 0;

// Crear un array con los productos y su precio.
    $productos = [
        'pan' => 2,
        'patatas' => 1,
        'leche' => 4,
        'cocacola' => 3,
        'agua' => 2,
        'carne' => 5
    ];

// Ahora nuestra funcion tiene que poder comprar todos los productos a pesar de tener saldo 0 en la cartera.

function compras($productos, $cartera){
    
    // Creamos nuestra cesta de la compra.
        $cesta = [];

    // Recorremos los productos.
    foreach ($productos as $producto => $precio){
        // Tengo que tener en la cartera saldo suficiente para comprar todos los productos.
        // Agrego a mi cartera el valor de todos los productos.
        $cartera += $productos[$producto];

        if ($cartera >= $productos[$producto]) {
            $cartera -= $productos[$producto];
            // Esta es la mejor manera de agregar todos los productos a nuestra cesta.
            $cesta += ["$producto" => $precio];
        } 
    }
     
    var_dump($cesta);
}

compras($productos, $cartera);

?>