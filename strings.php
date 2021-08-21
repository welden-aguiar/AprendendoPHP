<?php 

    echo 'Vai viajar \n hoje <br>';
    echo 'Vai viajar \\n hoje <br>';
    echo "Vai viajar \n hoje <br>";

    echo 'Arnold disse uma vez: "I\'ll be back"<br>';

    // Imprime: Você tem certeza em apagar C:\*.*?
    echo 'Você tem certeza em apagar C:\\*.*?<br>';

    // Imprime: Você tem certeza em apagar C:\*.*?
    echo 'Você tem certeza em apagar C:\*.*?<br>';

    // Imprime: Variáveis $também não $expandem
    echo 'Variáveis $também não $expandem<br>';
    $tambem = 5; $expandem = 5;
    // Imprime: Variáveis $também não $expandem
    echo "Variáveis $tambem não $expandem<br>";

    
    $str = 'This is a test.';
    $first = $str[0];
    $third = $str[2];
    var_dump($str);
    echo "<br>";
    print_r ($str);
    echo "<br>";
    print $third;
    echo "<br>";
    echo $first;

    $str = 'This is still a test.';
    $last = $str[strlen($str)-1];
    echo "<br>";
    echo $str;
    echo "<br>";
    echo $last;
    
    $str = 'Look at the sea';
    $str[strlen($str)-1] = 'e';
    echo "<br>";
    echo $str;

    $str = 'abc';

    var_dump($str['1']);
    echo "<br>";
    var_dump(isset($str['1']));
    
    echo "<br>";
    var_dump($str['1.0']);
    echo "<br>";
    var_dump(isset($str['1.0']));
    
    echo "<br>";
    var_dump($str['x']);
    echo "<br>";
    var_dump(isset($str['x']));
    
    echo "<br>";
    var_dump($str['1x']);
    echo "<br>";
    var_dump(isset($str['1x']));

    ?>