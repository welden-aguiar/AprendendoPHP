<?php
    #como acessar strings
    $var = array('a', 'b', 'c');

    echo $var;
    print_r ($var);
    var_dump($var);
    echo "<br>";

    #como acessar array
    foreach($var as $key){
        echo $key . "<br>";
    }



?>