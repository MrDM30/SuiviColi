<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DM TRANSPORT - Support</title>
</head>
<body>
    <div class="main-container">
        <div class="header">
            <div class="logo-container">
                <img src="images/logoDM.jpeg" alt="DAM'S MULTISERVICES Logo" class="logo">
            </div>
            <div class="header-content">
                <h1>DM TRANSPORT</h1>
                <nav class="navbar">
                    <ul class="nav-menu">
                        <li><a href="index.php" class="nav-link">Accueil</a></li>
                        <li><a href="suivi.php" class="nav-link">Suivi</a></li>
                        <li><a href="enregistrement.php" class="nav-link">Enregistrement</a></li>
                        <li><a href="historique.php" class="nav-link">Historique</a></li>
                        <li><a href="support.php" class="nav-link active">Support</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="support-container">
            <div class="support-title">Support client</div>
            <form action="traitement_support.php" method="post" class="support-form">
                <div class="support-group">
                    <label for="nom_client">Nom du client</label>
                    <input type="text" id="nom_client" name="nom_client" required>
                </div>

                <div class="support-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="support-group">
                    <label for="message">messsage</label>
                    <textarea id="message" name="message" required></textarea>
                </div>

                <div class="support-button-group">
                    <button type="submit" class="btn-envoyer">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
