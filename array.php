<?php

#sintaxe completa
    $arr = array(
        "nome" => "welden",
        "idade" => 25,
        "sexo" => m,
        35
    );

    echo $arr[nome];
    echo $arr[idade];
    echo $arr[sexo];
    echo $arr[3];
    echo $arr[0];

    foreach ($arr as $key){
        echo $key ."<br>";
    }

#sintaxe contraída
    $arr2 =[
        "foo" => "bar",
        "bar" => "foo"
    ];

    echo $arr2[foo];
    echo $arr2[bar];

#regras de chaves

    $arr3 = [
        "8" => "oito",
        "8.7" => "oito ponto sete",
        true => "um",
        false => "zero",
        Null => "string vazia",

    ];
    echo "<br>";
    foreach ($arr3 as $key){
        echo $key ."<br>";
    }
    echo "<br>";
    echo $arr3[8] . " ";
    echo $arr3[8.7]. " ";
    echo $arr3["8.7"]. " ";
    echo $arr3[true]. " ";
    echo $arr3[false]. " ";
    echo $arr3[Null]. " ";
    var_dump($arr3) . "<br>";

    echo "<br>";
    $array = array(
        1 => "a",
        "1" => "b",
        1.5 => "c",
        true => "d"
    );
    var_dump($array);

#array_filter
    $arr = [
        "banana",
        "maçã",
        "pêra",
        "abacaxi",
        "laranja",
    ];

    //declara a função e chama ela entre aspas.
    function tem ($valor) {
        return $valor;
    }
    $fruta = array_filter($arr,"tem");
    print_r($fruta);

    //função callback dentro da estrutura da função filter
    $arr2 = [
        "a" => 1,
        "b" => 2,
        "c" => 3,
        "d" => 4,
    ];
    echo "<br><br>";
    var_dump(array_filter($arr2, function($key){
        return $key == 'b';
    }, ARRAY_FILTER_USE_KEY));

    echo "<br><br>";
    var_dump(array_filter($arr2, function($value, $key){
        return $key == 'b' || $value == 4;
    }, ARRAY_FILTER_USE_BOTH));

#Array_flip
    //troca chave por valor, vice-versa
    echo "<br><br>";
    print_r($arr2);
    print_r(array_flip($arr2));

    echo "<br><br>";
    echo array_key_first($arr2);
    echo "<br><br>";
    echo array_key_last($arr2);
    echo "<br><br>";
    print_r (array_keys($arr2));

#reduce
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    function reduzir($valor, $vasilha) {
        $vasilha += $valor;
        return $vasilha;
    };

    //print_r (array_map("reduzir", $arr));
    echo "<br><br>";
    var_dump (array_reduce($arr, "reduzir"));

#array_func
    $nomes = ["joao","amelia","liardo","jaria","aparecida","naija"];
    function encontrarMaria($arg){
        if ($arg=="maria") {
            return true;
        }
    }
    if(array_walk($nomes, "encontrarMaria")){
        echo "Maria foi encontrada!";
    }

#Merge
    //une dois array um após o outro
    $turmaA = [
        "Alesca",
        "Caio",
        "Jaime",
        "Marlene",
        "Valeria",
    ];
    $turmaB = [
        "Alberto",
        "Debora",
        "Fabricio",
        "Leonidas",
        "Neusa",
        "Raquel",
        "Yuri",
    ];
    $turmaC = [
        "Eleonor",
        "Italo",
        "Quanta",
        "Zaida",
    ];

    print_r(array_merge($turmaA,$turmaB,$turmaC));//junta reordenando index
    echo "<br><br>";
    print_r(array_merge_recursive($turmaA,$turmaB,$turmaC));//junta reordenando index
    echo "<br><br>";
    print_r($turmaA + $turmaB + $turmaC);//adiciona ao primeiro os index faltantes
    





