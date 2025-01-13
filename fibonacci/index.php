<?php

function calcular_sequencia_fibonacci($num) {
    $fib = [0, 1];
    while ($fib[count($fib) - 1] < $num) {
        $fib[] = $fib[count($fib) - 1] + $fib[count($fib) - 2];
    }

    return $fib;
}

$numero = 60;

$sequencia_fibonacci = calcular_sequencia_fibonacci($numero);

echo "A sequencia de fibonacci é: " . implode(", ", $sequencia_fibonacci);
echo in_array($numero, $sequencia_fibonacci) ? "\nO número $numero pertence à sequência de Fibonacci." : "\nO número $numero não pertence à sequência de Fibonacci.";