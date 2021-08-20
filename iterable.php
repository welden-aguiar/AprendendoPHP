<?php 

    class a  {
        public $var1;
        public $var2;

        function somar(){
            return $this->var1 + $this->var2;
        }

        function bar() : iterable { //retorna um array interável
            return ['esse', 'é', 'um', 'array', ' :)'];
        }
    }

    $foo = new a();
    $foo2 = new a();

    $foo->var1 = 20; //assim acessa uma propriedade;
    $foo->var2 = 18; //acessar propriedade;
    //$foo->$var3 = 25; insere um valorem um novo atributo que não exite;
    //não dá erro porém as funções não fucionam como deveriam;

    echo $foo->var1 . "<br>"; //imprimindo variável
    echo $foo->var2 . "<br>";
    echo $foo->somar() . "<br>"; //assim acessar um método;

    print_r($foo);
    echo "<br>";
    print_r($foo2);
    echo "<br>";
    var_dump($foo);
    echo "<br>";


    function bar(iterable $iterable = []) {
        foreach($iterable as $value){
            echo "$value<br>";
        }
    }

    bar((array)$foo);

    function bar2(iterable $iterable = [1,2,3,4,5]) {
        foreach($iterable as $value){
            echo "$value<br>";
        }
    }

    bar2();
    bar2($foo->bar()); //o retorno do método bar() é o parametro para função bar2();

    var_dump($foo->bar()); //retornou um array interável
    echo "<br>";
    echo implode(" ",$foo->bar()); //implodiu em uma string


    echo "<br><br><br>********************************<br><br><br>";

    #gerador iterável
    function gen() : iterable {
        yield 1;
        yield $resultado = 3;
        yield [30,20,10];
    }
    
    $generator = gen();
    foreach($generator as $value) {
        if(!is_array($value)){
            echo "$value<br>";
        } else {
            if(is_array($value)){
                foreach($value as $subvalue){
                    echo "$subvalue<br>";
                }
            }
        }
    }




    
    