<?php

#variaveis fontes externas
    echo nl2br($_POST['username'] . "\n");
    echo $_REQUEST['username'] . "\n";
    echo $_POST['password'] . "\n";
    echo $_REQUEST['password'] . "\n";
?>

<?php

#formularios mais complexos
    if ($_POST){
        echo '<pre>';
        echo htmlspecialchars(print_r($_POST, true));
        echo '</pre>';
    }
?>
    <form action="" method="post">
        Nome: <input type="text" name="pessoa[nome]" /><br />
        Email: <input type="text" name="pessoa[email]" /><br />
        Cerveja: <br />
        <select multiple name="beer[]">
            <option value="antartica">Antartica</option>
            <option value="brahma">Brahma</option>
            <option value="skol">Skol</option>
        </select><br />
        <input type="submit" value="Enviar Dados" />
    </form>