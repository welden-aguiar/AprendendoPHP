<?php

$a = 'Aqui tem $a';
$b = 'viado';
$b = "Aqui tem o $b";


echo $a . "<br>" . $b. "<br> com aspas simples não aparece a variável, só com aspas duplas.<br>";

$nowdoc = <<<'EAP'
<br>No nowdoc as variáveis são não apresentadas $a. <br>
nowdoc é igual á aspas simples $a.<br>
EAP;

$heredoc = <<<EAP
<br>No heredoc as variáveis são apresentadas $a.<br>
heredoc é igual á aspas duplas $a.<br>
EAP;

echo $nowdoc;

echo $heredoc;