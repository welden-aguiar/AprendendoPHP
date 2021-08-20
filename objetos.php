<?php

#conversão de array em objeto. (instancia um objeto da classe stdClass)
    $arr = ["nome" => "Leão", "idade" => 23, "sexo" => "m", 32];
    $obj = (object)$arr;

    var_dump($obj);
    echo "<br>";

    class a {public $v1, $v2;}
    $a = new a();
    var_dump($a);

    echo "<br>$obj->nome é uma pessoa interessante.<br>Ele é uma pessoa de $obj->idade anos e de sexo $obj->sexo";


#se converter outro valor, a propriedade scalar conterá o valor
    echo "<br><br><br>*****************<br><br><br>";
    $object = (object)'string';
    var_dump ($object);
    echo "<br>$object->scalar";