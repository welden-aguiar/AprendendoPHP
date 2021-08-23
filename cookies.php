<?php

$value = "valor do cookie";

setcookie("CookieTeste", $value);

echo $_COOKIE["CookieTeste"] . "\n";

print_r($_COOKIE);


?>