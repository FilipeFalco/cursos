<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '123.456.781-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.426.789-10' => [
        'titular' => 'Roberto',
        'saldo' => 400
    ]
];

$contasCorrentes['123.456.782-09']['saldo'] = 500;

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}