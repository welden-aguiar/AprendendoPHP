<?php

//mostra foo e bar só após do include
    /*echo @"Eu sou $foo e ele é $bar.\n";
    include 'includeChamado.php';
    echo "Eu sou $foo e ele é $bar.\n";*/

//foo e bar apresentam apenas no escopo foobar,porém gb aparece em qualquer escopo
    /*function foobar() {
        include 'includeChamado.php';
        echo @"tenho $foo e tenho $bar, e $gb também.\n";
    }
    foobar();
    echo @"será que tenho $foo? e $bar? $gb é certeza?\n";*/

//include em string
    $string = get_include_contents('includeChamado.php');
    var_dump($string);
    function get_include_contents($filename) {
        if(is_file($filename)) {
            ob_start();
            include $filename;
            return ob_get_clean();
        }
        return false;
    }

    

 

?>