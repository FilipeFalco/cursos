<?php

$idade = 16;
$numeroDePessoas = 1;

echo "VocÊ pode entrar se tiver mais do que 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho";
} else if($idade >= 16 && $idade < 18  && $numeroDePessoas >= 2){
    echo "Você tem $idade anos e tem uma acompanhante maior de 18. Pode entrar";
} else {
    echo "Você não pode entrar";
}

echo PHP_EOL;

echo "Adeus";