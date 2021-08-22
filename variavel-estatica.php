<?php

function t(){

    static $count = 0;
    
    $count++;
    echo $count . "\n";
    if ($count < 10) {
        t();
    }
    $count--;
}

t();

?>