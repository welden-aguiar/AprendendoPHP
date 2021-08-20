<?php

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

    echo "<br><br><br>******************<br><br><br>";

#interface basica
    interface i { public function f();}

    class c1 implements i {public function f(){}}

    class e1 {}

    function f1(I $i){
        echo get_class($i)."<br>";
    }
    f1(new c1);
    //f1(new e1);  apresenta erro pois não é do tipo i

    echo "<br><br><br>******************<br><br><br>";

#retorno basico
    function soma($a, $b): float {
        return $a + $b;
    }

    var_dump(soma(10,8));

    echo "<br><br><br>******************<br><br><br>";





