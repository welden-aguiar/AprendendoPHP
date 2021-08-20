<?php
#callback
    function funcaocallback(){
        echo '<br>Função Callback!<br>';
    }

    class classe {
        static function metodocallback() {
            echo '<br>Metodo Callback!<br>';
        }
        public function metodoobjeto() {
            echo '<br>Metodo do Objeto!<br>';
        }
    }


    call_user_func(funcaocallback()); //pode chamar a função
    call_user_func('funcaocallback'); //pode chamar entre aspas

    call_user_func(array('classe','metodocallback')); //chama a classe e seu metodo estático
    call_user_func(classe::metodocallback());  //chama o metodo estatico passando a classe e chamando o metodo

    $obj = new classe();
    call_user_func($obj->metodoobjeto()); //assim que chama um metodo de objeto

#callback em closure
    //closure - função lambda dentro de uma variável
    $double = function($a) {
        return $a * 2;
    };
    $numbers = range(1,5); //função que retorna um array com intervalo: [1,2,3,4,5]

    $new_numbers = array_map($double, $numbers); // retorna um array.É chamado o callback double e passado o numbers como parametro.

    echo "<br>";
    print implode(' ',$new_numbers); //junta um array em string, com separador como primeiro argumento.
    echo "<br>";

    var_dump ($double(2));
    echo $double(4);

