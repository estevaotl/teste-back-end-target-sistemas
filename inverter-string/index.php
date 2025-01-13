<?php

function inverterString($string) {
    $inversa = '';
    $tamanho = mb_strlen($string);

    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $inversa .= $string[$i];
    }

    return $inversa;
}

$stringOriginal = "Teste Back-end Target Sistemas!";
$stringInvertida = inverterString($stringOriginal);

echo "A string original é: $stringOriginal\n";
echo "A string invertida é: $stringInvertida\n";
