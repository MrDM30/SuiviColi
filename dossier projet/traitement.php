<?php
// traitement.php - Enregistrer les données du formulaire dans un CSV simple
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expediteur = isset($_POST['expediteur']) ? trim($_POST['expediteur']) : '';
    $numero_exp = isset($_POST['numero_exp']) ? trim($_POST['numero_exp']) : '';
    $destinataire = isset($_POST['destinataire']) ? trim($_POST['destinataire']) : '';
    $numero_dest = isset($_POST['numero_dest']) ? trim($_POST['numero_dest']) : '';
    $destination = isset($_POST['destination']) ? trim($_POST['destination']) : '';

    // Emplacement du fichier CSV
    $dataDir = __DIR__ . DIRECTORY_SEPARATOR . 'data';
    if (!is_dir($dataDir)) mkdir($dataDir, 0755, true);
    $csvFile = $dataDir . DIRECTORY_SEPARATOR . 'colis.csv';

    $fh = fopen($csvFile, 'a');
    if ($fh) {
        // Ajouter entête si fichier neuf
        if (filesize($csvFile) === 0) {
            fputcsv($fh, ['expediteur','numero_exp','destinataire','numero_dest','destination','date']);
        }
        fputcsv($fh, [$expediteur, $numero_exp, $destinataire, $numero_dest, $destination, date('Y-m-d H:i:s')]);
        fclose($fh);
    }

    // Rediriger vers historique avec message de succès
    header('Location: historique.php?enregistrement=ok');
    exit;
}

// Si accès direct, renvoyer à l'enregistrement
header('Location: enregistrement.php');
exit;
