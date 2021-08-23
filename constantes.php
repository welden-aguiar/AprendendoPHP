<?php

    const constante = "Constante";
    define ("newConstante", "\n Nova Constante \n");
    //constante2 = \"Isso também é uma constante!"; está forma está errada

    echo constante;
    echo newConstante;
    echo is_string(constante) . "\n";

    // var_dump(get_defined_constants(true)); apresenta todas as constantes
    // a maioria dos nomes em php são constantes
    // só pode definir com const em escopo mais global.
    // const sempre será case-sensitive enquando define() pode ou não ser
    
    echo "constante definida?" . defined('constante') . "\n";

    echo "nemConstante definida?" . defined('newConstante') . "\n";

?>