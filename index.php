<?php

#passando arrays
    $arr = [1,2,3,4,5];

    function f_arr($input){
        $result = 0;
        foreach($input as $value){
            $result += $value;
        }
        echo "o \$input[0] tem o valor: $input[0] \n";
        return $result;
    }

    echo (f_arr($arr)) . "\n";

#argumentos verticalmente
    function f_varg(
        $p,
        $s,
        $t,
        $com_default = 5,
        $outro_defaul = 'esse é o valor default',   //a virgula é facultativa no final
    ){}

#argumentos opcionais
    function fop($c = null){
        if(isset($c)){
            echo "O argumento foi passado!\n";
        } else {
            echo "O argumento não foi passado!\n";
        }
    }
    fop(1);
    fop();    
    function fop2($fruta, $tipo = null){        //o tipo opcional deve sempre vir depois, senão Error
        return "Fazendo uma taça de $fruta $tipo. \n";
    }
    print fop2('morangos');
    print fop2('morangos', 'doces');

#numero de argumentos
    function sum (...$num) {        //o ... tranforma a lista em um array
        $result = 0;
        foreach($num as $value){
            $result += $value;
        }
        return $result;
    }
    echo sum(1,2,3,4,5) . "\n";

    /*o ... também transforma um array em uma lista de argumentos, exemplo:
        function f($a,$b){}
        $arr = [1,2];
        f(...$arr); é o mesmo que f(1,2) */

#argumentos nomeados
        
?>