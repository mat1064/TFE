<center><img src="./wp_IMG/arsenal.png"></center>

<center><table border="2"></center>
<link rel="stylesheet" type="text/css" href="style.css">

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
// On récupère tout le contenu de la table
$reponse = $bdd->query('SELECT * FROM armurerie');

// 

?>

	<th>Matricule</th>
	<th>designation</th>
	<th>IMG</th>
	<th>Type</th>
	<th>PV</th>
	<th>Attaque</th>
	<th>Défense</th>
	<th>Capacité offensive</th>
	<th>Capacité défensive</th>
	<th>Agilité</th>

	<?php


// On affiche chaque entrée une à une

while ($donnees = $reponse->fetch())
{

	//$id = $GET_['ID'];
?>



	 



	<tr>

 			<td><?php echo $donnees['Matricule'];?></td>
 			<td><?php echo $donnees['Designation'];?></td>
 			<td><img src="<?php echo $donnees['IMG'];?>" width="60" height="60"></td>
 			<td><?php echo $donnees['Type'];?></td>
 			<td><?php echo $donnees['PV'];?></td>
 			<td><?php echo $donnees['Attaque'];?></td>
 			<td><?php echo $donnees['Defense'];?></td>
 			<td><?php echo $donnees['Capacite_Offensive'];?></td>
 			<td><?php echo $donnees['Capacite_Defensive'];?></td>
 			<td><?php echo $donnees['Agilite'];?></td>


 			
 			
 			

 		</tr>




<?php 


}

$reponse->closeCursor(); // On termine le traitement de la requête 

   ?>
</table></center>

<!-- image avec un lien -->
<center><a href="Accueil.html"><img src="./wp_IMG/home.png" width="50" height="50"></a></center>