<?php

function sacar($conta, $valor) {
    if($valor > $conta[saldo]) {
        exibeMensagem("Você não pode sacar");
    } else {
        $conta['saldo'] -= $valor;
    }
}

function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
}

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

$contasCorrentes['123.426.789-10'] = sacar($contasCorrentes['123.426.789-10'], 500);

if(500 > $contasCorrentes['123.426.789-10']['saldo']) {
    exibeMensagem("Você não pode sacar este valor");
} else {
    $contasCorrentes['123.426.789-10']['saldo'] -= 500;
}

foreach ($contasCorrentes as $cpf => $conta) {
exibemensagem($cpf . " " . $conta['titular'] . " " . $conta['saldo']);
}