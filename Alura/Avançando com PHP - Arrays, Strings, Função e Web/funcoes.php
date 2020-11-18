<?php

function sacar(array $conta, float $valor):array
{
    if($valor > $conta['saldo']) {
        exibeMensagem("Você não pode sacar");
    } else {
        $conta['saldo'] -= $valor;
    }
    return $conta;
}

function depositar(array $conta, float $valorParaDepositar): array
{
    if($valorParaDepositar > 0) {
        $conta['saldo'] += $valorParaDepositar;
    } else {
        exibeMensagem("Depositos precisão ser positivos");
    }
    return $conta;
}

function exibeMensagem(string $mensagem)
{
    echo $mensagem . '<br>';
}

function titularComLetrasMaiusculas(array &$conta) {
    $conta['titular'] = strtoupper($conta['titular']);

}

function exibeConta(array $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}