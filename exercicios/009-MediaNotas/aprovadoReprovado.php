<?php 
$n1 = 7.5;
$n2 = 8.0;
$n3 = 6.5;

$media = ($n1 + $n2 + $n3) / 3;

echo "Média: " . number_format($media, 2) . "<br>";

if ($media >= 7) {
    echo "Aprovado!";
} else {
    echo "Reprovado!";
}
?>