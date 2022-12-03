<!-- Crear una función que imprima X valores random en el intervarlo 0 - X. -->

<?php


function randomValues () {
    for ($i=0; $i < 5; $i++) { 
    $arr = [];
    $arr = random_int(1, 100);
    echo("$arr  ");
}
}

randomValues()

?>