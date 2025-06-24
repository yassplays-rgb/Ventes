<?php
    $fr = fopen("tawjtat.txt","r");
    $c = 0;
    while($line = fgets($fr)){
        echo $line ;
        while($ch = fgetc($fr)){
            $c++;
        }
    }
    echo $c;
?>