<!-- Opcional hacer otro ejercicio de las compras:
- Crear una función que dado una cartera y un array de productos con
(nombre y precio) devuelva un array (misma estructura) con solo los
productos que se han podido comprar. Ejemplo textual:
cartera: 7
Productos disponibles:
pan, 2
papas, 1
cocacola,3
agua, 2
cesta: pan, papas, cocacola
cartera: 1 -->

<!-- ------------------------------------------------------------------------------------------------------------------------ -->


<?php

// Crear nuestra cartera con nuestro saldo.
    $cartera = 9;

    // Crear un array con los productos y su precio.
    $productos = [
        'pan' => 2,
        'patatas' => 1,
        'leche' => 4,
        'cocacola' => 3,
        'agua' => 2
    ];

// Crear una funcion que nos devuelva un array con la misma estructura pero solo con los productos que hemos podido comprar.

function compras($productos, $cartera){
    
    // Creamos nuestra cesta de la compra.
        $cesta = [];

    // Recorremos los productos.
    foreach ($productos as $producto => $precio){
        // Si nuestra cartera es igual al valor de los productos sigue el ciclo.
        if ($cartera >= $productos[$producto]) {

            // Si tenemos saldo en la cartera, le restamos el valor de cada producto.
            $cartera -= $productos[$producto];

            // Agregamos todos los productos que nuestro saldo antes de llegar a cero pueda comprar.
            // Esta es la mejor manera de agregar todos los productos a nuestra cesta.
            $cesta += ["$producto" => $precio];
        } 
    }
     
    var_dump($cesta);
}

compras($productos, $cartera);

?>