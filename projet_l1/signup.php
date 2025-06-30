<?php

 // Le chemin de nom titre
require('utils/title.php');
// Le chemin de notre database
require('config/database.php');


$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    // 1. Récupération des données
    $nom     = htmlspecialchars(trim($_POST['nom']));
    $email   = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $niveau  = htmlspecialchars(trim($_POST['niveau']));
    $pass    = trim($_POST['mot_de_passe']);

    // 2. Vérifie que tous les champs sont remplis
    if (empty($nom) || empty($email) || empty($niveau) || empty($pass)) {
        $message = "<div class='alert alert-warning text-center'> Tous les champs sont obligatoires.</div>";
    } else {
        // 3. Vérifie si l'email existe déjà
        $check = $db->prepare("SELECT * FROM users WHERE email = ?");
        $check->execute([$email]);

        if ($check->rowCount() > 0) {
            $message = "<div class='alert alert-danger text-center'>Cet email est déjà utilisé.</div>";
        } else {
            // 4. Hachage du mot de passe
            $hashedPass = password_hash($pass, PASSWORD_DEFAULT);

            // 5. Insertion
            $insert = $db->prepare("INSERT INTO users (nom, email, niveau, mot_de_passe) VALUES (?, ?, ?, ?)");
            $insert->execute([$nom, $email, $niveau, $hashedPass]);

            $message = "<div class='alert alert-success text-center'>✅ Votre compte a été avec succès.</div>";
        }//Redirection apres 3 secondes
         header("refresh:3;url=login.php");
    }
}
?>


<?php require("views/signup.views.php"); ?>