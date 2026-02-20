<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DM TRANSPORT - Enregistrement</title>
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
                        <li><a href="suivi.php" class="nav-link">Suivi</a></li>
                        <li><a href="enregistrement.php" class="nav-link active">Enregistrement</a></li>
                        <li><a href="historique.php" class="nav-link">Historique</a></li>
                        <li><a href="support.php" class="nav-link">Support</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        
        <div class="form-container">
            <div class="form-title">enregistrement</div>
            
            <form action="traitement.php" method="post">
                <div class="form-group">
                    <label for="expediteur">Expéditeur</label>
                    <input type="text" id="expediteur" name="expediteur" required>
                </div>

                <div class="form-group">
                    <label for="numero_exp">Numero exp</label>
                    <input type="text" id="numero_exp" name="numero_exp" required>
                </div>

                <div class="form-group">
                    <label for="destinataire">Destinataire</label>
                    <input type="text" id="destinataire" name="destinataire" required>
                </div>

                <div class="form-group">
                    <label for="numero_dest">numero dest</label>
                    <input type="text" id="numero_dest" name="numero_dest" required>
                </div>

                <div class="form-group">
                    <label for="destination">Destination</label>
                    <input type="text" id="destination" name="destination" required>
                </div>

                <div class="button-group">
                    <button type="submit" class="btn btn-enregistrer">Enregistrer</button>
                    <button type="reset" class="btn btn-annuler">Annuler</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>