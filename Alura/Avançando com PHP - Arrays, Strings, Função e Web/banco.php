<?php

include 'funcoes.php';

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

$contasCorrentes['123.426.789-10'] = sacar(
    $contasCorrentes['123.426.789-10'],
    400
);

$contasCorrentes['123.426.789-10'] = depositar(
    $contasCorrentes['123.426.789-10'],
    300
);

titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>
