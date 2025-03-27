<?php
    $file = "Mars.txt";
    $of = fopen($file,"r");
    $ligne = "";
    $prixA = 0;
    $prixV = 0;
    $benefice = 0;
    while(($ligne = fgets($of)) !== false){
            $table = explode(':',$ligne);
            $prixA += (float)$table[1];
            $prixV += (float)$table[2];
            $benefice += (float)$table[3];
    }
    echo "Votre achats au total est : " . $prixA ;
    echo "\n Votre Total de ventes est : " . $prixV;
    echo "\n Votre benefice total est : " . $benefice;
?>

<!--
nom:prixA:prixV:benefice

RM = reparation Manette
RDJ = recharge des jeux
RW = reparation whatsapp

$c = fgetc($of);
        if($c == "\n"){
            $table = explode(':',$ligne);
            $prixA += (float)$table[1];
            $prixV += (float)$table[2];
            $benefice += (float)$table[3];
        } else {
            $ligne .= $c;
        }