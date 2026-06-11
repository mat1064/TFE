<?php
session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);
// Vérification si l'utilisateur est connecté et est admin
//if (!isset($_SESSION['user_id'])) {
//    die('Vous devez être connecté pour accéder à cette page.');
//}

// Connexion à la base de données
$conn = new PDO('mysql:host=localhost;dbname=projet', 'users', 'root');

// Forcer le mode de fetch en tableau associatif
$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// Vérification de la connexion
if (!$conn) {
    die("Erreur de connexion");
}

// Préparer la requête pour récupérer le rôle
$stmt = $conn->prepare("SELECT role FROM users WHERE id = ?");
var_dump($stmt, "Objet PDOStatement");

$executeSuccess = $stmt->execute([$_SESSION['user_id']]);
var_dump($executeSuccess, "Résultat de execute()");

if (!$executeSuccess) {
    // Si l'exécution échoue, affiche l'erreur
    $errorInfo = $stmt->errorInfo();
    die("Erreur lors de l'exécution : " . print_r($errorInfo, true));
}

// Récupérer le résultat
$user = $stmt->fetch();
var_dump($user, "Données récupérées avec fetch()");

// Vérification de la session user_id
var_dump($_SESSION['user_id'], "user_id en session");

// Vérifier si $user est bien un tableau et non false
if ($user === false) {
    echo "Aucun utilisateur trouvé avec l'id " . $_SESSION['user_id'] . "<br>";
} else {
    echo "Rôle de l'utilisateur : " . $user['role'] . "<br>";
}

// Si vous souhaitez continuer après cette vérification
if (!$user || $user['role'] !== 'admin') {
    die('Accès interdit.');
}

// Vérifier si une suppression est demandée
if (isset($_POST['delete_user'])) {
    $user_id = $_POST['user_id'];
    // Éviter que l'admin puisse supprimer lui-même
    if ($user_id == $_SESSION['user_id']) {
        echo "Vous ne pouvez pas supprimer votre propre compte.";
    } else {
        $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->execute(['user_id']);
        echo "Utilisateur supprimé.";
    }
}

// Récupérer tous les utilisateurs
$stmt = $conn->query("SELECT id, pseudo, role FROM users");
$users = $stmt->fetchAll();

?>

<h1>Gestion des utilisateurs</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Pseudo</th>
        <th>Email</th>
        <th>Rôle</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= htmlspecialchars($user['id']) ?></td>
            <td><?= htmlspecialchars($user['pseudo']) ?></td>
            <td><?= htmlspecialchars($user['email']) ?? 'N/A' ?></td>
            <td><?= htmlspecialchars($user['role']) ?></td>
            <td>
                <?php if ($user['role'] !== 'admin'): ?>
                <!-- Formulaire pour supprimer l'utilisateur -->
                <form method="post" style="display:inline;">
                    <input type="hidden" name="user_id" value="<?= $user['id'] ?>">
                    <button type="submit" name="delete_user" onclick="return confirm('Voulez-vous vraiment supprimer cet utilisateur ?')">Supprimer</button>
                </form>
                <?php else: ?>
                    <!-- On ne permet pas de supprimer un admin -->
                    <em>Admin</em>
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>