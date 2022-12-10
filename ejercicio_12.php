<!-- Reproducir ejercicio de la password. -->

<?php
// LLamamos al archivo con todas las funciones.
include("ejercicio_12_user_management.php");
include("ejercicio_12_resp_valid.php");

// Creamos las variables para guardar nuevos usuarios en un array^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

$users = [];
// ------------------------------------------------------------------------------------------------


// Creamos nuevos users^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

do {
    // Creamos un nuevo usuario mientras sea positiva la respuesta, si es positiva entra la funcion isPositiveResponse.
    $users[] = newUser();
    // Verificar la respuesta que sea Yes o Not.
    do {
        $resp = readline('Quieres crear un nuevo usuario, Y/N: ');
    // Cuando la condicion del while se convierte en false es cuando sale del ciclo, mientras sea true sigue haciendo el ciclo. Asi siempre.
    } while (isValidResp($resp));
// Y en est while principal la condicion es que si ponemos un y de yes entonces volvemos a crear un nuevo usuario al seguir en este condicional y si damos a n not sale del ciclo al ser false.
} while (isPositiveResp($resp));


dd($users);
// ------------------------------------------------------------------------------------------------





// Funcion para imprimir por consola^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

// function dd($element){
//     return die(var_dump($element));
// }

function dd($users){
    echo "Usuario: \n";
    foreach($users as $user){
        echo $user ['name'].PHP_EOL;
        echo $user ['email'].PHP_EOL;
    }
};