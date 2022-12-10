<?php

// Validar la password^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
function validatedPwd($pwd, $pwd2){
    // Comprobar si coinciden las contraseñas.
    if ($pwd !== $pwd2) {
            echo "Los password no coinciden, por favor vuelva a intentarlo\n";
            return false;
        }
    // min 4 caracteres.
    // Si el largo del pwd es menor a 4 retorna false y no nos deja avanzar con la funcion, debemos reintroducir otro pwd.
    if (strlen($pwd) < 4 ) {
        echo "El password tiene que tener mas de 4 caracteres, vuelve a intentarlo.\n";
        return false;
    }
    // max 10 caracteres.
    // Si el string del pwd es mayor a 10 retorna false y debemos reintroducir contraseña.
    if (strlen($pwd) > 10 ) {
        echo "El password no puede tener mas de 10 caracteres.\n";
        return false;
    }
    // que contenga una o mas mayusculas.
    // Si no contiene mayusculas retorna false y tenemos que reintroducir el pwd.
    if (!containUpper($pwd)) {
        echo "El password debe contener una o mas mayusculas.\n";
        return false;
    }

    // que contenga uno o mas caracteres especiales (@, $, #, _, -).
    if(!special($pwd)){
        echo "El password debe contener al menos uno de estos caracteres especiales: @, $, #, _, -\n";
        return false;
    }

    // Si pasa las validaciones anteriores retorna true y sale de esta funcion********
    return true;
    
}

// Funciones ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

// Funcion para solucionar que el password tenga una mayuscula al menos, utilizamos tambien la funcion 'built in' ctype_upper para verificar que el pwd tenga al menos una mayuscula.
function containUpper($pwd){
    for ($i=0; $i < strlen($pwd); $i++) { 
        if (ctype_upper($pwd[$i])) {
            return true;
        }
    }
    return false;
};


// Funcion para solucionar que el password tenga al menos un caracter especial de los que le indicamos en un array, utilizamos la funcion 'built in' in_array que nos busca 'una aguja en un pajar' un needle 'aguja' en un pajar 'haystack', la aguja es nuestro password pwd y buscamos en el pajar a ver si contiene un caracter que esta en el pajar array character.
function special($pwd){
    $character = ["@", "$", "#", "_", "-"];
    
    for ($i=0; $i < strlen($pwd); $i++) { 

        if (in_array($pwd[$i], $character)){
            return true;
        }
    }
    return false;
}
