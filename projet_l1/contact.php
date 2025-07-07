<?php

require('utils/title.php');
require('config/database.php');

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['envoyerMessage'])) {
    $nom     = htmlspecialchars(trim($_POST['nom']));
    $email   = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $sujet   = htmlspecialchars(trim($_POST['sujet']));
    $contenu = htmlspecialchars(trim($_POST['message']));

    // Vérification des champs
    if (empty($nom) || empty($email) || empty($sujet) || empty($contenu)) {
        $message = "<div class='alert alert-warning text-center'>⚠️ Tous les champs sont requis.</div>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "<div class='alert alert-danger text-center'>❌ Adresse email invalide.</div>";
    } else {
        // Insertion en base de données
        $sql = "INSERT INTO messages_contact (nom, email, sujet, message) VALUES (?, ?, ?, ?)";
        $stmt = $db->prepare($sql);
        $success = $stmt->execute([$nom, $email, $sujet, $contenu]);

        if ($success) {
            $message = "<div class='alert alert-success text-center'>✅ Message envoyé avec succès.</div>";
        } else {
            $message = "<div class='alert alert-danger text-center'>❌ Une erreur est survenue lors de l'envoi.</div>";
        }
    }
    //Redirection apres 3 secondes
        header("refresh:3;url=index.php");
}
?>

<?php require('views/contact.views.php'); ?>