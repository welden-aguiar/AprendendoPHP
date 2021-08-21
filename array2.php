<?php
#Array indexado e associativo
        $arr = array(
            "a", "b",
            6 => "c",
            "d",
            "teste" => "e",
            "f",
        );
        var_dump($arr);

#Array dentro de array
        $arr2 = array(
            "foo" => "bar",
            42 => 24,
            "multi" => array(
                "dimensional" => [
                    "array" => "foo",
                ]
            )
        );

        echo "<br>";
        echo "<br>";
        var_dump($arr2["foo"]);
        echo "<br>";
        var_dump($arr2[42]);
        echo "<br>";
        var_dump($arr2["multi"]["dimensional"]["array"]);
            //Tanto [] quanto {} podem ser usados para indicar o indice.

#Array em funções
        function getArray() {
            return array(1, 2, 3);
        }
        //após php 5.4
        $secondElement = getArray()[1];
        
        //antes 
        $tmp = getArray();
        $firstElement = $tmp[0];

        //ou
        list(,, $thirdElement) = getArray();

        echo "<br>";
        var_dump($firstElement);
        echo "<br>";
        var_dump($secondElement);
        echo "<br>";
        var_dump($thirdElement);

#sintaxe de colchete
        //como a variável está setada como string, não há a inserção de um elemento de array e sim da informação na casa da string.
        $arr = "hoje";
        $arr[2] = "2";
        //$arr[] = "valor";
        echo $arr;

        $arr = array(5 => 1, 12 => 12);
        $arr2[] = 3;
        $arr2[] = 7;
        $arr3["x"] = 42;
        $arr3["y"] = 35;
        $arr3["z"] = 18;
        echo "<br>";
        var_dump($arr);
        echo "<br>";
        var_dump($arr2);
        echo "<br>";
        var_dump($arr3);

        unset($arr3["y"]); //retira o elemento;
        unset($arr2); //apaga o array;

        echo "<br>";
        echo "<br>";
        var_dump($arr);
        echo "<br>";
        //var_dump($arr2); por ter sido apagado não aparece;
        echo "<br>";
        var_dump($arr3);

        //caso apague um indice, o próximo valor inserido não pegará o valor do indice apagado e sim o valor do maior indice +1;

        echo "<br>";
        echo "<br>";
        echo "<br>";

        $array = array(1, 2, 3, 4, 5);
        echo "<br>";
        print_r($array);
        //retirando os elementos
        foreach($array as $i=>$key){
            unset($array[$i]);
        }
        echo "<br>";
        print_r($array);
        //adicionando um elemento
        $array[] = 6;
        echo "<br>";
        print_r($array);

        //reindexando
        $array = array_values($array);
        $array[] = 7;
        echo "<br>";
        print_r($array);


#referencia em array
        $cores = array('Azul', 'Vermelho', 'Preto', 'Roxo');

        foreach ($cores as &$cor) {
            $cor = strtoupper($cor);
            echo "$cor <br>";
        }

        print_r ($cores);

# preenchendo um array com todos os itens de um diretório.
        $handle = opendir('.');
        while (false !== ($file = readdir($handle))) {
            $files[] = $file;
        }
        closedir($handle);
        echo "<br>";

        print_r($files);
        echo "<br><br>" . count($files) . "<br>"; //conta elementos do array

        sort($files,); //ordena array
        echo "<br>";
        print_r($files);
        echo "<br>";

        asort($files,); //ordena array ascendente
        echo "<br>";
        print_r($files);
        echo "<br>";

        rsort($files,); //ordena array descendente
        echo "<br>";
        print_r($files);
        echo "<br>";

#array multidimensional        
    $fruits = array ( "frutas"  => array ( "a" => "laranja",
                                        "b" => "banana",
                                        "c" => "maçã",
                                        ),
                    "numeros" => array ( 1,
                                        2,
                                        3,
                                        4,
                                        5,
                                        6
                                        ),
                    "buracos" => array (      "primeiro",
                                        5 => "segundo",
                                                "terceiro",
                                        ),
                    );
    echo $fruits["frutas"]["a"] . "<br>";                    
    echo $fruits["frutas"]["c"] . "<br>";                    
    echo $fruits["numeros"]["3"] . "<br>";                    
    echo $fruits["buracos"]["5"] . "<br>";  
    //criando uma nova dimensão no array 
    $fruits["frutas"]["frutas vermelhas"] =  ["morango","cereja","framboesa","amora"];               
    echo "<br>"; 
    print_r($fruits["frutas"]);  
    echo "<br>";
    print_r($fruits["frutas"]["frutas vermelhas"]);    
    echo "<br>";
    print_r($fruits["frutas"]["frutas vermelhas"][0]);     
    
#Operador de referência
    $arr1 = array(2,3);
    $arr2 = $arr1; //neste caso cria um array novo
    $arr2[] = 4; //acrescenta no $arr2

    print_r($arr1);
    echo "<br>";
    print_r($arr2);
    echo "<br>";
    
    $arr3 = &$arr1; //$arr3 é uma referencia para $arr1, não sendo um array novo.
    $arr3[] = 3; //acresenta no $arr1
    print_r($arr1);
    echo "<br>";
