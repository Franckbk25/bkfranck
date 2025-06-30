<?php

 // Le chemin de nom titre
require('utils/title.php');
// Le chemin de notre database
require('config/database.php');

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['connexion'])) {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $pass  = trim($_POST['mot_de_passe']);

    if (empty($email) || empty($pass)) {
        $message = "<div class='alert alert-warning text-center'>⚠️ Tous les champs sont requis.</div>";
    } else {
        // Rechercher l’utilisateur par email
        $check = $db->prepare("SELECT * FROM users WHERE email = ?");
        $check->execute([$email]);

        if ($check->rowCount() === 1) {
            $user = $check->fetch(PDO::FETCH_ASSOC);

            if (password_verify($pass, $user['mot_de_passe'])) {
                // Authentification réussie
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_nom'] = $user['nom'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_niveau'] = $user['niveau'];

                // Redirection vers la page d'accueil
                header("Location: index.php");
                exit;
            } else {
                $message = "<div class='alert alert-danger text-center'>❌ Mot de passe incorrect.</div>";
            }
        } else {
            $message = "<div class='alert alert-danger text-center'>❌ Aucun compte trouvé avec cet email.</div>";
        }
    }
}
?>


<?php require("views/login.views.php"); ?>