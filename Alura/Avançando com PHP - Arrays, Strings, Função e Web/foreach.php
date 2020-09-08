<?php

$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    12345678110 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    12342678910 => [
        'titular' => 'Roberto',
        'saldo' => 400
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}