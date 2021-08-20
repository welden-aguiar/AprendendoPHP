<?php 
    class a {
        public static $v1 = "Eu sou variável estática!";
        private static $v2;

        public static function metodo(){
            return "Eu sou método estático!";
        }
        public function incrementV2() {
            $v2++;
        }
        public function getV2() {
            return $v2;
        }



    }

    echo a::$v1;
    echo "<br>";
    echo a::metodo();

    echo"<br><br><br>";

    $a = new a();
    a::$v2;
    echo "<br>";


