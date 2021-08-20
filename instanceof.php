<?php

    class a {

    }
    class noA {

    }

    $a = new a;

    var_dump($a instanceof a);
    var_dump($a instanceof noA);

    echo "<br><br><br>**********<br><br><br>";

    class pai {}

    class filho extends pai {}

    $pai = new pai;
    $filho = new filho;

    var_dump($pai instanceof pai);
    var_dump($pai instanceof filho);
    var_dump($filho instanceof pai);
    var_dump($filho instanceof filho);

    echo "<br><br><br>**********<br><br><br>";

    interface interfaceA {}

    class classe implements interfaceA {}

    $objeto = new classe;

    var_dump($objeto instanceof classe);
    var_dump($objeto instanceof interfaceA);

    echo "<br><br><br>**********<br><br><br>";

    $nomeObjeto = 'classe';
    var_dump($objeto instanceof $nomeObjeto);
    
    echo "<br>";
    var_dump(get_class($objeto));
    echo "<br>" . get_class($objeto);
    echo "<br>";
    var_dump(get_class($filho));
    echo "<br>" . get_class($filho);

    echo "<br><br><br>**********<br><br><br>";

    var_dump ($objeto instanceof object);