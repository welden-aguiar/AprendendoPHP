<?php 
    $pesquisada = $_POST['pequisa'];
    $substitue = $_POST['substitue'];
    $string = "Não vou mais chorar.<br>";

    if (strpos($string,$pesquisada)){
        substr_replace($string, $substitue,0);
        echo $string;
    } else {
        echo "Palavra não encontrada! <br>";
    }
?>
    
    <form action="index.php" method="post">
    <p>O que procurar: <input type="text" name="pesquisa"/><p>
    <p>Substituir por:<input type="text" name="substitue"/><p>
    <p><input type="submit"></p>
    </form>

<?php 
    $pesquisada = $_POST['pesquisa'];
    $substitue = $_POST['substitue'];
    $string = "Não vou mais chorar.<br>";
    
    if (strchr($string,$pesquisada)){
        $stringMod = substr_replace($string, $substitue,strpos($string,$pesquisada), strlen($pesquisada));
        echo $stringMod;
    } else {
        echo "Palavra não encontrada! <br>";
    }


?>