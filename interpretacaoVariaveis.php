<?php

#sintaxe simples
$suco = "maçã";

echo "eu beco suco de $suco<br>";
echo "eu beco suco de $sucos<br>";
echo "eu beco suco de {$suco}s<br>";

#simples com arrays
$sucos = array("maçã","laranja","misto" => "Frutas Vermelhas","tomate");
$suco = "laranja";

if(strchr($sucos,"laranja")){
    echo "Função certa<br>";
} else {
    echo "Função errada<br>";
}

foreach($sucos as $value) {
    if(strchr($value, " ")){
        echo $value . "<br>";
    }
}

echo "Eu bebo suco de $sucos[0]<br>";
echo "Eu bebo suco de $sucos[1]<br>";
echo "Eu bebo suco de $sucos[2]<br>";
echo "Eu bebo suco de $sucos[misto]<br>";

echo "<h3>Em um array ao se utilizar a sintaxe de \"indice => valor\" é atribuido o nome do indice dentro do array, logo não é possível acessá-lo por meio do indice posicional e sim pelo nome dado na atribuição. O próximo elemento do array receberá como índice o valor posicional posterior ao nomeado, logo, não há salto de numeração.<br></h3>";

class Pessoa {
    public $nome = array("João", "Janaina", "Roberto", "Smith");
    public $nome1 = "Catarina";
    public $nome2 = "Alexandre";

}

$pessoa = new Pessoa();

echo "$pessoa->nome1 é muito linda.<br>";
echo "$pessoa->nome1 é apaixonada por $pessoa->nome2.<br>";
echo "{$pessoa->nome[0]} bebe suco de $sucos[0]<br>";
echo "$pessoa->nome[0] bebe suco de $sucos[0]<br>";
echo "{$pessoa->nome[2]} bebe suco de $sucos[1]<br>";
echo "{$pessoa->nome[1]} bebe suco de $sucos[misto]<br>".PHP_EOL;
echo "{$pessoa->nome[3]} bebe suco de $sucos[2]<br>";

echo "<h3><br>Para acessar o valor de um atributo do tipo array dentro de um objeto, é necessário colocá-lo entre chaves {}, assim apresenta o valor do elemento do array. Caso não coloque dentro de chaves o valor apresentado será o tipo do atributo com sua respectiva posição, conforme exemplo acima.<br>Essa regra serve para variáveis escalares, elementos de array ou propriedades de um objeto.<br><h3>";

#Sintaxe complexa

//mostrar todos os erros
error_reporting(E_ALL);

$adjetivo = 'Fantástico';

echo "Isto é $adjetivo<br>";
echo "Isto é {$adjetivo}<br>";
echo "Isto é { $adjetivo}<br>";


class Square {
    public $width = 20;
}
$square = new Square();
echo "Este quadrato tem $square->width00 centimetros.<br>"; //{} são necessárias
echo "Este quadrato tem {$square->width}00 centimetros.<br>";


$name = "Meu Nome";
echo "Este é o valor da variável nomeada de $name: {${$name}}.<br>";
//echo "Este é o valor da variável nomeada pelo retorno do valor getName(): {${getName()}}.<br>";

class foo {
    var $bar = "Eu sou um Bar.";
}
$foo = new foo();
$bar = 'bar';
$baz = array('foo','bar','baz','quux');
echo "{$foo->bar}<br>";
echo "{$foo->$bar}<br>";
echo "{$foo->{$baz[1]}}<br>";

#Sintaxe complexa 2

//mostrar todos os erros
error_reporting(E_ALL);

class bebidas {
    const softdrink = 'rootbeer';
    public static $ale = 'ipa';
    const testeConstante = 'constante';
}

$rootbeer = 'A & W';
$ipa = 'Alexander Keith\'s';

echo "Eu gosto de {${bebidas::softdrink}}<br>";
echo "Eu gosto de {${bebidas::testeConstante}}<br>";
echo "Eu gosto de {${bebidas::softdrink}}<br>";
echo ${bebidas::softdrink};
echo "<br>";

echo "Eu gosto de {${bebidas::$ale}}<br>";

class bebidas2 {
    const softdrink = 'rootbeer';
    public static $ale = 'ipa';
    public $teste = 'teste';
    const testeConstante = 'constante';
}

$rootbeer = 'A & W';
$ipa = 'Alexander Keith\'s';

$bebidas2 = new bebidas2();

echo "Eu gosto de {$bebidas2->softdrink}<br>";
echo "Eu gosto de {$bebidas2->ale}<br>";
echo "Eu gosto de {$bebidas2->teste}<br>";
echo "Eu gosto de {$bebidas2->testeConstante}<br>";