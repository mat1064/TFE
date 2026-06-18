<center><img src="./ATT_IMG/Attaque.png" width="400" height="130"></center>

<center><table border="2"></center>
<link rel="stylesheet" type="text/css" href="style2.css">

	<?php


try
{
		// Connexion base de donnée
	$bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrete tout
	die('Erreur : '.$e->getMessage());
}
// Si tout va bien on peut continuer 
// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM Attpilot');

// 

?>

	<th>Nom</th>
	<th>PV</th>
	<th>Premiere attaque</th>
	<th>Degat</th>
	<th>Deuxieme attaque</th>
	<th>Degat</th>	

	<?php


// On affiche chaque entrée une à une

while ($donnees = $reponse->fetch())
{

	//$id = $GET_['ID'];
?>



	 



	<tr>

 			<td><?php echo $donnees['NOM'];?></td>
 			<td><?php echo $donnees['PV'];?></td>
 			<td><?php echo $donnees['ATT_FIRST'];?></td>
 			<td><?php echo $donnees['DEGAT_FIRST'];?></td>
 			<td><?php echo $donnees['ATT_SECOND'];?></td>
 			<td><?php echo $donnees['DEGAT_SECOND'];?></td>


 			
 			
 			

 		</tr>

	


<?php 
}

$reponse->closeCursor(); // On termine le traitement de la requête 
   ?>
</table></center>

<!-- image avec un lien -->
<center><a href="Acc.html"><img src="./ATT_IMG/home.png" width="50" height="50"></a></center>