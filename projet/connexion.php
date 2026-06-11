<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', '');

if(isset($_POST['envoi'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $username = htmlspecialchars($_POST['pseudo']);
        $password = $_POST['mdp'];

        // Récupérer l'utilisateur par pseudo
     $stmt = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
     $stmt->execute(array($username));
     $user = $stmt->fetch();


if ($user && password_verify($password, $user['mdp']) && role_verify($user['role'])) {
    // Connexion réussie
    $_SESSION['id'] = $user['id'];
    $_SESSION['pseudo'] = $user['pseudo'];
    $_SESSION['role'] = $user['role'];
    // Vérifier si c'est un admin
            if ($user['role'] === 'admin') {
               
                // Rediriger vers la page admin
                header('Location: admin.php');
            } else {
                // Rediriger vers la page d'accueil
    header('Location: accueil.html');
    exit();
}} else {
    // Mot de passe incorrect ou utilisateur non trouvé
    echo "Pseudo ou mot de passe incorrect.";
}
    } else {
        echo "Veuillez remplir tous les champs";
    }
}
?>
<!-- Formulaire de connexion -->

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
    <input type="submit" name="envoi" value="Se connecter">
</form>

</body>
</html>
<!-- https://www.youtube.com/watch?v=cmRg4qCSU9g -->