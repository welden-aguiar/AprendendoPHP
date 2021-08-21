<?php 
        if(!($fp = fopen('.\\texto.txt','r+'))){
            return;
        }
        $arq = file_get_contents('.\\texto.txt',FILE_TEXT,null);
        echo $arq;

        fclose();
    ?>