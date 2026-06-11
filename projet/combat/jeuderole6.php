<html>
<head>
   <title>1VS1</title>
   <LINK REL=StyleSheet type="text/css" HREF="VS.css">
   <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
</head>

<body> 
  <br>
<center>    

<?php
require 'BIBLI/MACLASSE2.PHP';

$idpersonnage1 = rand(1, 12);
$idpersonnage2 = $idpersonnage1;
while ($idpersonnage1 == $idpersonnage2) {
    $idpersonnage2 = rand(1, 12);
}

try {
    $bdd = new PDO('mysql:host=localhost;dbname=pokemonpoo;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}

?>

<table border="0">
<tr> <th>
<?php

$perso1 = new Personnage();
$reponse = $bdd->query('SELECT * FROM attpok WHERE id=\''.$idpersonnage1.'\'');

while ($donnees = $reponse->fetch()) {
    $perso1->setNom($donnees['NOM']);
    $perso1->setType($donnees['ATT_FIRST']);
    $perso1->setAttaque($donnees['DEGAT_FIRST']);
    $perso1->setDefense($donnees['ATT_SECOND']);
    $perso1->setAttaqueSpecial($donnees['DEGAT_SECOND']);
    $perso1->setPv($donnees['PV']);
    $perso1->afficherTout();
}
?> </th> <th><img src ="./IMG/VS.png" width=400 height=300></imG> </th> <th>
 
<?php
$perso2 = new Personnage();
$reponse = $bdd->query('SELECT * FROM attpok WHERE id=\''.$idpersonnage2.'\'');

while ($donnees = $reponse->fetch()) {
    $perso2->setNom($donnees['NOM']);
    $perso2->setType($donnees['ATT_FIRST']);
    $perso2->setAttaque($donnees['DEGAT_FIRST']);
    $perso2->setDefense($donnees['ATT_SECOND']);
    $perso2->setAttaqueSpecial($donnees['DEGAT_SECOND']);
    $perso2->setPv($donnees['PV']);
    $perso2->afficherTout();
}
?>

</th> </table>
<br><hr></br>

</table>
<?php
$reponse->closeCursor();
$pv1 = $perso1->pv();
$pv2 = $perso2->pv();
$round = 0;

 $perso1->afficherVie1();
 $perso2->afficherVie2();

while ($pv1 > 0 && $pv2 > 0) {
    $round++;
     echo "Round n° $round - ";

    // Mélanger l'ordre des personnages
    $personnages = [$perso1, $perso2];
    shuffle($personnages);

    foreach ($personnages as $personnage) {
        if ($personnage == $perso1) {
            $action = rand(0, 1);
            if ($action == 0) {
                $perso1->frapper($perso2);
                echo "Pokemon 1 utilise sa première attaque sur Pokemon 2.";
            } else {
                $perso1->attspecial($perso2);
                echo "Pokemon 1 utilise sa deuxième attaque sur Pokemon 2.";
            }
        } else {
            $action = rand(0, 1);
            if ($action == 0) {
                $perso2->frapper($perso1);
                echo "Pokemon 2 utilise sa première attaque sur Pokemon 1.";
            } else {
                $perso2->attspecial($perso1);
                echo "Pokemon 2 utilise sa deuxième attaque sur Pokemon 1.";
            }
        }

        echo "<br>";
    }

    $perso1->afficherApres();
    $perso2->afficherApres();
    $pv1 = $perso1->pv();
    $pv2 = $perso2->pv();
    echo "<br>";
}
// Partie finale : Afficher le gagnant
echo "<br><hr></br>";

if ($pv1 <= 0 && $pv2 <= 0) {
    echo "Match nul ! Les deux Pokémons sont épuisés.";
} elseif ($pv1 <= 0) {
    echo "Pokemon 2 remporte le combat !";
} elseif ($pv2 <= 0) {
    echo "Pokemon 1 remporte le combat !";
}


?>

<hr>
<center><a href="Acc.html"><img src="./ATT_IMG/home.png" width="50" height="50"></a></center>
</center>
</body>
</html>