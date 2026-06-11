<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');

if(isset($_POST['envoi'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $username = htmlspecialchars($_POST['pseudo']);
        $password = $_POST['mdp'];
        // Hash sécurisé
        $hash = password_hash($password, PASSWORD_DEFAULT);

        // Vérifier si le pseudo existe déjà
        $verif = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
        $verif->execute(array($username));
        if($verif->rowCount() > 0){
            echo "Ce pseudo est déjà pris.";
        } else {
            // Insérer l'utilisateur
            $insertUser = $bdd->prepare('INSERT INTO users(pseudo, mdp) VALUES(?, ?)');
            $insertUser->execute(array($username, $hash));
            echo "Inscription réussie !";

            // Redirection vers la page de connexion
            header("Location: connexion.php"); 
            exit();
        }
    } else {
        echo "Veuillez remplir tous les champs";
    }
}
?>
<!-- Formulaire d'inscription -->

<!DOCTYPE html>
<html>
<head>
    <title>connexion</title>
    <meta charset="UTF-8">
    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

    </style>
</head>
<body>

    <!-- <form method="post" action="" align="center"> -->
        <form method="post" action="">
    <input type="text" name="pseudo" placeholder="Pseudo" autocomplete="off">
    <input type="password" name="mdp" placeholder="Mot de passe" autocomplete="off">
    <input type="submit" name="envoi" value="S'inscrire">
</form>

</body>
</html>
<!-- https://www.youtube.com/watch?v=cmRg4qCSU9g -->