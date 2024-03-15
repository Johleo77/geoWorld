<?php 
function PU(string $modele, int $type){
$prixmodele = ["ironman" => 22.3 , "thor"=> 19.8 , "spiderman"=>20.6];
$prix = $prixmodele[$modele];

switch ($type){

    case "orignal":
        $prix += 0.5;
        break;

    case "argent":
        $prix += 0.9;
        break;

    case "or":
        $prix += 1.3;
        break;

}
return $prix;
}

function prixcommande(array $commande){

    $prix = 0;
    foreach ($commande as $x){ 
        $prix += PU($x[0],$x[1]) * $x[2];
    }
    if ($prix >= 50){
        $prix *=0.90;
    }
    return $prix ;

    }
?>