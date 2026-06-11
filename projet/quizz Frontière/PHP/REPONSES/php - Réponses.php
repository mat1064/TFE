<?php
session_start();
// Récupérer et convertir en minuscules toutes les réponses utilisateur
$reponsesUtilisateur = array(
    strtolower($_POST['qa']),
    strtolower($_POST['qb']),
    strtolower($_POST['qc']),
    strtolower($_POST['qd']),
    strtolower($_POST['qe']),
    strtolower($_POST['qf']),
    strtolower($_POST['qg']),
    strtolower($_POST['qh']),
    strtolower($_POST['qi']),
    strtolower($_POST['qj'])
);

// Réponses correctes en minuscules
$reponse = array(
    "l'imc",
    "limite de l'espace connu",
    "un crâne armé",
    "wallrun",
    "harmony",
    "lien au pilote, poursuite de la mission, protection du pilote",
    "typhon",
    "les titans",
    "angel city",
    "le voyage interstellaire"
);

// Fonction pour comparer sans tenir compte des majuscules
function reponseCorrecte($reponseUtilisateur, $reponseCorrecte) {
    return $reponseUtilisateur == strtolower($reponseCorrecte);
}

// Vérification pour chaque question
$questions = [
    "Question 1" => [$reponsesUtilisateur[0], $reponse[0]],
    "Question 2" => [$reponsesUtilisateur[1], $reponse[1]],
    "Question 3" => [$reponsesUtilisateur[2], $reponse[2]],
    "Question 4" => [$reponsesUtilisateur[3], $reponse[3]],
    "Question 5" => [$reponsesUtilisateur[4], $reponse[4]],
    "Question 6" => [$reponsesUtilisateur[5], $reponse[5]],
    "Question 7" => [$reponsesUtilisateur[6], $reponse[6]],
    "Question 8" => [$reponsesUtilisateur[7], $reponse[7]],
    "Question 9" => [$reponsesUtilisateur[8], $reponse[8]],
    "Question 10" => [$reponsesUtilisateur[9], $reponse[9]],
];

$score = 0; // Initialiser le score

// Affichage des résultats et comptage du score
foreach ($questions as $question => [$reponseUtilisateur, $reponseCorrecte]) {
    if (reponseCorrecte($reponseUtilisateur, $reponseCorrecte)) {
        echo "$question : Votre réponse est '$reponseUtilisateur', elle est correcte !<br>";
        $score++;
    } else {
        echo "$question : Votre réponse est '$reponseUtilisateur', elle est incorrecte ! La bonne réponse était '$reponseCorrecte'.<br>";
    }
}

// Afficher le score total
echo "<p>Vous avez trouvé $score bonnes réponses sur 10.</p>";

// Enregistrement du score dans la base si utilisateur connecté
if (isset($_SESSION['id'])) {
    $userId = $_SESSION['id'];
    $gameName = "Quiz Frontière"; 

    // Connexion à la base de données
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insérer le score
        $stmt = $bdd->prepare('INSERT INTO scores (user_id, game_name, score) VALUES (?, ?, ?)');
        $stmt->execute([$userId, $gameName, $score]);

        echo "<p>Score enregistré avec succès !</p>";
    } catch (PDOException $e) {
        echo "<p>Erreur lors de l'enregistrement du score : " . $e->getMessage() . "</p>";
    }
} else {
    echo "<p>Connectez-vous pour enregistrer votre score.</p>";
}
?>
//<?php
// Redirection vers la page d'accueil
//header('Location: index.html');
//exit;
//?>