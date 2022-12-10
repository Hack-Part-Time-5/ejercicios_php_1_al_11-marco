<?php
include("ejercicio_12_pwd_valid.php");
// Creamos una funcion para ingresar mis datos de usuario^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

function newUser() {
    // Recuperado los datos.
    $userData = getUserData();
    
    // Mapeado de los Datos.
    $user = mapUserData($userData);

    return $user;
}

// -------------------------------------------------------------------------------------------------


// Funciones ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

// Funcion para almacenar la informacion de los nuevos usuarios.
function getUserData(){
    // Rellenamos el formulario con nuestros datos***********************
    // nombre.
    $name = readline("Ingresa tu nombre: ");
    // correo.
    $email = readline("Ingresa tu email: ");
    
    // comprobamos que los password coinciden****************************
    // Verificamos.
    // aunthenticamos.
    do {
        // password.
        $pwd = readline("Ingresa un password: ");
        // Confirmar password.
        $pwd2 = readline("Repite tu password: ");
    } while (!validatedPwd($pwd, $pwd2));

    return [$name, $email, $pwd];
}


// Funcion para que nos devuelva el nuevo usuario
function mapUserData($userData){
    return [
        "name" => $userData[0],
        "email" => $userData[1],
        "pwd" => $userData[2],
    ];
}

