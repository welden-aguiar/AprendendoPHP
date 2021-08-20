<?php

class foo 
{
    var $foo;
    var $bar;

    function foo()
    {
        $this-> foo = 'Foo';
        $this-> bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'Welden';

echo <<<EOT
Meu nome é $name. Eu estou imprindo $foo->foo.<br>
Agora, eu estou imprimindo {$foo -> bar[1]}.<br>
Isto deve imprimir um 'A' maiúsculo: \x41
EOT;

//heredoc em argumentos
var_dump(<<<EOD
foobar!
EOD
);

var_dump(array(<<<EOD
foobar!
EOD
));

//heredoc em variaveis estáticas

#Variáveis estáticas
function foo()
{
    static $bar = <<<LABEL
Nothing in here...
LABEL;
return $bar;
}

#Classe propriedades/constantes
class C1
{
    const BAR = <<<ABC
Constant example
ABC;
    function C1()
    {
        return BAR;
    }
}

echo foo();
$C1 = new C1;
echo $C1;
