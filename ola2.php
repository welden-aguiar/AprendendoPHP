<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World!</title>
</head>
<body>

    <form action="action.php" method="post">
        <p>Nome: <input type="text" name="name"  /></p>
        <p>Idade: <input type="text" name="age" /></p>
        <p><input type="submit"></p>
    </form>

    
    <?php echo __LINE__ . "<br>"; ?>
    <?php echo __FILE__ . "<br>"; ?>
    <?php echo __DIR__ . "<br>"; ?>
    <?php echo __FUNCTION__ . "<br>"; ?>
    <?php echo __CLASS__ . "<br>"; ?>
    <?php echo __METHOD__ . "<br>"; ?>
    <?php echo __NAMESPACE__ . "<br>"; ?>
    <?php echo  "<br>"; ?>
    <?php echo  "<br>"; ?>
    <?php echo  "<br>"; ?>
    <?php echo $_SERVER['PHP_SELF'] . "<br>"; ?>
    <?php echo $_SERVER['GATEWAY_INTERFACE'] . "<br>"; ?>
    <?php echo $_SERVER['SERVER_ADDR'] . "<br>"; ?>
    <?php echo $_SERVER['SERVER_NAME'] . "<br>"; ?>
    <?php echo $_SERVER['SERVER_SOFTWARE'] . "<br>"; ?>
    <?php echo $_SERVER['SERVER_PROTOCOL'] . "<br>"; ?>
    <?php echo $_SERVER['REQUEST_METHOD'] . "<br>"; ?>
    <?php 
    $date = date_create();
    date_timestamp_set($date,$_SERVER['REQUEST_TIME']);
    echo date_format($date,'U = Y-m-d H:i:s') . "<br>"; 
    ?>
    <?php echo $_SERVER['REQUEST_TIME_FLOAT'] . "<br>"; ?>
    <?php echo $_SERVER['QUERY_STRING'] . "<br>"; ?>
    <?php echo $_SERVER['DOCUMENT_ROOT'] . "<br>"; ?>
    <?php echo $_SERVER['HTTP_ACCEPT'] . "<br>"; ?>
    <?php echo $_SERVER['HTTP_ACCEPT_CHARSET'] . "<br>"; ?>
    <?php echo $_SERVER['HTTP_ACCEPT_ENCODING'] . "<br>"; ?>
    <?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "<br>"; ?>
    <?php echo $_SERVER['HTTP_CONNECTION'] . "<br>"; ?>
    <?php echo $_SERVER['HTTP_HOST'] . "<br>"; ?>
    <?php echo $_SERVER['HTTP_REFERER'] . "<br>"; ?>
    <?php echo $_SERVER['HTTP_USER_AGENT'] . "<br>"; ?>
    <?php echo $_SERVER['HTTPS'] . "<br>"; ?>
    <?php echo $_SERVER['REMOTE_ADDR'] . "<br>"; ?>
    <?php echo $_SERVER['REMOTE_HOST'] . "<br>"; ?>
    <?php echo $_SERVER['REMOTE_PORT'] . "<br>"; ?>
    <?php echo $_SERVER['REMOTE_USER'] . "<br>"; ?>
    <?php echo $_SERVER['REDIRECT_REMOTE_USER'] . "<br>"; ?>
    <?php echo $_SERVER['SCRIPT_FILENAME'] . "<br>"; ?>
    <?php echo $_SERVER['SERVER_ADMIN'] . "<br>"; ?>
    <?php echo $_SERVER['SERVER_PORT'] . "<br>"; ?>
    <?php echo $_SERVER['SERVER_SIGNATURE'] . "<br>"; ?>
    <?php echo $_SERVER['PATH_TRANSLATED'] . "<br>"; ?>
    <?php echo $_SERVER['SCRIPT_NAME'] . "<br>"; ?>
    <?php echo $_SERVER['REQUEST_URI'] . "<br>"; ?>
    <?php echo $_SERVER['PHP_AUTH_DIGEST'] . "<br>"; ?>
    <?php echo $_SERVER['PHP_AUTH_USER'] . "<br>"; ?>
    <?php echo $_SERVER['PHP_AUTH_PW'] . "<br>"; ?>
    <?php echo $_SERVER['AUTH_TYPE'] . "<br>"; ?>
    <?php echo $_SERVER['PATH_INFO'] . "<br>"; ?>
    <?php echo $_SERVER['ORIG_PATH_INFO'] . "<br>"; ?>
    

</body>
</html>