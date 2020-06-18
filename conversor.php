<?php

/*
- User can enter up to 8 binary digits in one input field
- User must be notified if anything other than a 0 or 1 was entered
- User views the results in a single output field containing the decimal (base 10) equivalent of the binary number that was entered
** Bonus features
- User can enter a variable number of binary digits 

 */


$bin = isset($_POST['bin']) ? $_POST['bin'] : false;

if ($bin == false) {
    exit;
} else {
    if(!converterBin($bin)) {
        echo 'Erro';
    } else {
        echo converterBin($bin);
    }
}

function converterBin($bin) {
    
    for ($i=0; $i < strlen($bin); $i++) {
        if ($bin[$i] != "1" && $bin[$i] != "0") {
            return false;
            exit;
        }
    }

    $decimal = bindec($bin);
    return $decimal;
}
?>