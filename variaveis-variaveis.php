<?php

#variáveis variaveis
    class foo{
        public $bar = 'Eu sou bar.';
        public $arr = array('foo','bar');
    }

    $arr2[]='foo';
    $arr2[]='bar';

    $foo = new foo();

    echo $foo->{$foo->arr[1]} . "\n";
    echo $foo->arr[1] . "\n";

    $a = "bar";
    $bar = "hello";
    $hello = "world";
    $world = "a";

    echo $a ."\n"; //imprime bar
    echo $$a . "\n"; //imprime hello
    echo $$$a . "\n"; //imprime world
    echo $$$$a . "\n"; //imprime a
    echo $$$$$a . "\n"; //imprime bar novamente






