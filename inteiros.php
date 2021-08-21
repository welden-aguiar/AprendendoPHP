<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $a = 1234;
    echo "<br>" . gettype($a) . "<br>";
    $a = 0123;
    echo "<br>" . gettype($a) . "<br>";
    $a = 0x1A;
    echo "<br>" . gettype($a) . "<br>";
    $a = 0b11111111;
    echo "<br>" . gettype($a) . "<br>";
    $a = 1_123_567;
    echo "<br>" . gettype($a) . "<br>";
    echo "<br>" . PHP_INT_MAX . "<br>";
    echo "<br>" . PHP_INT_MIN. "<br>";
    
    $b = 1_123_567;
    echo "<br>" . var_dump(25/7) . "<br>";
    echo "<br>" . var_dump((int)(25/7)) . "<br>";
    echo "<br>" . var_dump(round(25/7)) . "<br>";
    echo "<br>" . intdiv(25,7) . "<br>";
    
    $foo = "1";
    echo "<br>" . $foo . " => " . gettype($foo) . "<br>";
    $foo = 2;
    echo "<br>" . $foo . " => " . gettype(strval($foo)) . "<br>";
    $foo = $foo * 1.3;
    echo "<br>" . $foo . " => " . gettype($foo) . "<br>";
    $foo = 5 * "10 pequenos porcos";
    echo "<br>" . $foo . " => " . gettype($foo) . "<br>";

    $foo = "10";
    echo "<br>" . gettype(intval($foo)). "<br>";

    $foo = 10;
    $str = "$foo";
    $fst = (string) $foo;

    $vorf = ($str === $fst);
    echo "<br>" . $vorf . "<br>";
    
    $foo = "10";
    echo "<br>" . (int)((0.1 + 0.7) * 10) . "<br>";
    echo "<br>" . ((0.1 + 0.7) * 10) . "<br>";
    echo "<br>" . intval((0.1 + 0.7) * 10) . "<br>";
    echo "<br>" . round((0.1 + 0.7) * 10) . "<br>";
    if (is_nan(false)){
        echo 'not a number!';
    };
    
    ?>
</body>
</html>