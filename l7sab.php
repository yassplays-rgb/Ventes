<?php
    $fileMars = "Mars.txt";
    $fileAvril = "Avril.txt";
    $fileMai = "Mai.txt";
    $fileJuin = "Juin.txt";

    function CalculerFile($file){
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
        echo basename($file,".txt") . "\n";
        echo "Votre achats au total est : " . $prixA ;
        echo "\n Votre Total de ventes est : " . $prixV;
        echo "\n Votre benefice total est : " . $benefice;
        $nette = $benefice - 2617;
        echo "\n Nette = " .$nette ;
    }

    CalculerFile($fileMars);
    echo("\n\n\n\n");
    CalculerFile($fileAvril);
    echo("\n\n\n\n");
    CalculerFile($fileMai);
    echo("\n\n\n\n");
    CalculerFile($fileJuin);
?>