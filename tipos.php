<?php
    $casas = array(1, 2, 3, 4);

    foreach($casas as $key => $value){
        echo "{$key} => {$value} <br>";
    };

    $endereço = "rua A";
    $lote = 'a';
    $casa = $casas[0];
    $ocupado = true;


    echo var_dump($endereço);
    echo var_dump($lote);
    echo var_dump($casa);
    echo "<br>" . gettype($ocupado) . "<br>";

    if (is_bool($ocupado)){
        echo "É boolean!";
    };

    echo "<br>" . gettype((string)$casa) . "<br>";
    
#classe basica
    class c {}
    class d extends c{}

    class e{}

    function f(C $p) {
        echo get_class($p)."<br>";
    }

    f(new c);
    f(new d);
    //f(new e); apresenta erro pois não é do tipo c

    echo "\n\n\n<br><br><br>******************<br><br><br>\n\n\n";

#interface basica
    interface i { public function f();}

    class c1 implements i {public function f(){}}

    class e1 {}

    function f1(I $i){
        echo get_class($i)."<br>";
    }
    f1(new c1);
    //f1(new e1);  apresenta erro pois não é do tipo i

    echo "\n\n\n<br><br><br>******************<br><br><br>\n\n\n";


#retorno basico
    function soma($a, $b): float {
        return $a + $b;
    }

    var_dump(soma(10,8));

    echo "\n\n\n<br><br><br>******************<br><br><br>\n\n\n";

#retorno um objeto
    class classe {}

    function getC(): classe {
        return new classe;
    }

    var_dump(getC());

#tipo null
    function f2(?classe $c){
        var_dump($c);
    }

    f2(new classe);
    f2(null);
    var_dump(getC(null));

    function get_item(): ?string {
        if(isset($GET['item'])) {
            return $GET['item'];
        } else {
            return null;
        }
    }

    var_dump(get_item());

#tipo união
    //usa '|' para declarar dois tipos EX: string|int

    function foo(): string | int {} //o retorno da função pode ser string ou inteiro.

#tipo strict
    // se habilitado obriga que o valor passado deve ser igual o passado, não há conversão
    // declare (strict_types=1);

#tipo coercivo com união
    //força a adoção do tipo 
    //preferencias: 1º int, 2º float, 3º string, 4º bool.

#diversos
    //referencia --> uso do &
    function array_baz(array &$param){
        $param = 1;
    }
    $var = [];
    array_baz($var); //passo um array como parametro e ele é transformado em um int pela função
    var_dump($var); //imprime int(1)
    array_baz($var); //apresenta erro pois o $var agora é int e não arrays

#pseudo tipos
    //number -> float ou int
    //array|object -> union que indica que pode ser array ou objeto
    //... -> $... utilizado em funções para indicar parametros infinitos.
?>
