#!/usr/bin/php
<?php
$arquivo = fopen('arquivo.txt','r');
#fwrite($arquivo,'minha primeira linha'.PHP_EOL);
#fwrite($arquivo,'minha segunda linha'.PHP_EOL);
#fwrite($arquivo,'minha terceira linha'.PHP_EOL);
#fwrite($arquivo,'minha quarta linha'.PHP_EOL);
#fwrite($arquivo,'minha quinta linha'.PHP_EOL);

$linha = fgets($arquivo);
echo $linha;
fwrite($arquivo, 'linha do meio');     
