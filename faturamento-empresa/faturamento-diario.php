<?php

$json = '{
    "faturamento": [100, 200, 150, 300, 0, 0, 400, 500, 0, 250, 300, 150, 0, 0, 100]
}';

$data = json_decode($json, true);
$faturamento = $data['faturamento'];

// Calculo do menor e maior valor de faturamento
$menorFaturamento = min(array_filter($faturamento));
$maiorFaturamento = max(array_filter($faturamento));

// Calculo da média mensal, ignorando os dias sem faturamento (0)
$valoresFaturamento = array_filter($faturamento);
$mediaFaturamento = array_sum($valoresFaturamento) / count($valoresFaturamento);

// Contando os dias com faturamento acima da média
$diasAcimaDaMedia = count(array_filter($faturamento, function ($v) use ($mediaFaturamento) {
    return $v > $mediaFaturamento;
}));

echo "Menor valor de faturamento: R$" . number_format($menorFaturamento, 2, ',', '.') . "\n";
echo "Maior valor de faturamento: R$" . number_format($maiorFaturamento, 2, ',', '.') . "\n";
echo "Número de dias com faturamento acima da média: $diasAcimaDaMedia\n";