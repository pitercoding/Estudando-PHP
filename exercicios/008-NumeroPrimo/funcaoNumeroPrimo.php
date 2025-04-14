<?php
function ehPrimo($num) {
    if ($num <= 1) return false;

    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

echo ehPrimo(7) ? "É primo" : "Não é primo";
?>
