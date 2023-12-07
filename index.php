<?php
function checkLength($password)
{
    if (strlen($password) >= 8) {
        return true;
    }
    echo "La password è troppo corta \n";
    return false;
}


function checkNumber($password)
{
    for ($i = 0; $i < strlen($password); $i++) {
        if (is_numeric($password[$i])) {
            return true;
        }
    }
    echo "La password deve contenere un numero \n";
    return false;
}

function checkUpper($password)
{
    for ($i = 0; $i < strlen($password); $i++) {
        if (ctype_upper($password[$i])) {
            return true;
        }
    }
    echo "La password deve contenere una maiuscola \n";

    return false;
}


function checkSpecial($password)
{
    $specialChars = ["!", '#', '$', '%', '&', '+', '€'];

    foreach ($specialChars as $char) {
        if (str_contains($password, $char)) {
            return true;
        }
    }
    echo "La password deve contenere un carattere speciale \n";

    return false;
}

function checkPassword()
{

    echo "La password inserita deve contenere almeno:\n8 caratteri,\nalmeno 1 numero,\nalmeno 1 maiuscola,\nalmeno 1 carattere speciale\n\n";

    $password = readline('Inserisci la password: ');

    if (checkLength($password) && checkNumber($password) && checkUpper($password) && checkSpecial($password)) {
        echo "Password inserita con successo \n";
        return true;
    } else {
        echo "Password non valida \n";
        return false;
    }
}
// l'utente con il ciclo for seguente ha 5 tentativi per inserire la password
$count = 0;
do {
    if ($count < 5) {
        $passwordValid = checkPassword();
    } else {
        echo "Password sbagliata troppe volte";
    }
    $count++;
} while ($passwordValid == false && $count<=5);

// La funzione per la media
function media(...$numeri){
    $somma = array_sum($numeri);

    echo "La media è: " . $somma / count($numeri);
}

media(20,30,40,50,68,98);