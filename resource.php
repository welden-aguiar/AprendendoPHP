<?php 

#resource - variável especial (recurso)
    $fp = fopen("foo","w");
    echo get_resource_type($fp);

    $doc = new xmldoc("1.0");
    echo get_resource_type($doc->doc);
    
