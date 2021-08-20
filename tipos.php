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
