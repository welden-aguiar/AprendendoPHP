<?php

#Call functions
    f();
    function f(){
        echo "Fui escrita após a chamada. E pasmem, eu funciono!\n";
    }

    //fif();        isso não funciona, pois fif não exite. Fatal Error.
    if (true){
        function fif(){
            echo "Como fui escrita dentro do if, só exitos apṍs passar pelo if. Uma chamada anterior não funciona.\n";
        }
    }
    fif();

    function ffora() {
        echo "Eu exito, porém a função dentro de mim só pode exitir se ffora for chamada.\n";
        function fdentro(){
            echo "Só exitirei após chamada de ffora.\n";
        }
    }
    //fdentro();        não funciona pois até ser chamado o ffora ele não exite 
    ffora();
    fdentro();          //este funciona

#recursion

    function fr($a){
        
        if($a < 10){
            echo "$a\n";
            $a++;   
            fr($a);
        }
    }
    fr(1);
?>