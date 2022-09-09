<?php

require_once($argv[1]);

if(count($argv) < 2){
    echo "argument non valide \n";
    exit(1);
}

function affiche_reg():void{
    global $lesRégions;

    foreach ($lesRégions as $region){
        echo $region['nom'],"\n";
    }
}

function affiche_dep():void{
    global $lesRégions;

    foreach ($lesRégions as $region){
        $i=0;
        echo "\n",$region['nom']," : \n\n";
        foreach ($region['départements'] as $departement){
            echo $departement['libellé'],"\n";
            $i++;
        }
        //echo $i,"\n";
    }
}

function getMostPopularRegion():void{
    global $lesRégions;
    $tab = [];
    $x=0;

    foreach ($lesRégions as $region){
        $i=0;
        foreach ($region['départements'] as $departement){
            $i++;
        }
        $tab[$x]=$i;
        $x++;
        //echo $i,"\n";
    }
    arsort($tab);
    $key=array_key_first($tab);
    //echo print_r($tab);
    //echo print_r($lesRégions);

    echo $lesRégions[$key]["nom"],"\n";
}

//Désactiver le ou les commentaire(s) ci-dessous pour lancer la ou les fonction(s)

//affiche_reg();
//affiche_dep();
//getMostPopularRegion();
?>
