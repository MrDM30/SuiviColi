<?php
// Minimal login handler: accepts any non-empty credentials for demo
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    if ($email !== '' && $password !== '') {
        // Pour une vraie application, valider via BD
        header('Location: admin.php');
        exit;
    }
}

header('Location: connexion.php?error=1');
exit;
