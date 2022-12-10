<?php

// Funcion para Verificar si queremos o no queremos crear un nuevo usuario:
function isValidResp($resp){
    if (strtolower($resp) != 'y' && strtolower($resp) != 'n') {
        return false;
    }
}


// Funcion para crear nuevos usuarios:
function isPositiveResp($resp){
    if (strtolower($resp) == 'y') {
        return true;
    }
}