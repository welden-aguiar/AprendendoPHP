<?php

    $a = array("fruta1" => "maçã", "fruta2" => "abacate");
    $b = array("fruta1" => "laranja", "fruta3" => "uva");
    $c = array("abacate", "maçã");
    $d = array("maçã", "abacate");
    $e = array(0 => "maçã", "1"=>"abacate");


    print_r($a + $b);
    echo "\n";
    var_dump($a == $c);
    echo "\n";
    var_dump($a === $c);
    echo "\n";
    var_dump($c == $d);
    var_dump($d == $e);
    var_dump($d === $e);


?>