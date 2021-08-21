<?php
        $text = "These are a few words :) ...  ";
        $arrText = explode(" ",$text);

        echo $arrText[0];
        echo $arrText[1];
        echo $arrText[2];
        echo $arrText[(count($arrText)-3)];
        fprintf($text);
?>