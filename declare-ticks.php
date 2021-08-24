<?php

#declare com ticks
    //executa a função que foi registrada para cada expressão no código
    //se o código tiver 20 expressões serão chamados 20 tickers.
    declare(ticks=1);

    //uma função chamada a cada evento tick
    function tick_handler(){
        echo "tick_handler() called\n";
    }
    //registrar um função é chamar a função declarada;
    /*1*/register_tick_function('tick_handler'); //imprime o que está na função.

    /*2*/$a = 1;

    if($a > 0) {
        /*3*/$a += 2;
        /*4*/print($a);
    };
    /*5*/echo " mais um \n";

?>