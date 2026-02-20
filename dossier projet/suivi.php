<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DM TRANSPORT - Suivi de colis</title>
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
                        <li><a href="suivi.php" class="nav-link active">Suivi</a></li>
                        <li><a href="enregistrement.php" class="nav-link">Enregistrement</a></li>
                        <li><a href="historique.php" class="nav-link">Historique</a></li>
                        <li><a href="support.php" class="nav-link">Support</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        
        <div class="suivi-container">
            <div class="suivi-title">Suivi de colis</div>
            
            <div class="search-section">
                <div class="search-box">
                    <input type="text" id="numero_suivi" name="numero_suivi" placeholder="Entrer votre numero de suivi" class="search-input">
                </div>
                <button class="btn-recherche">RECHERCHE</button>
            </div>

            <div class="tracking-status">
                <div class="status-timeline">
                    <div class="status-item">
                        <div class="status-circle">RECU</div>
                    </div>
                    <div class="status-line"></div>
                    <div class="status-item">
                        <div class="status-circle">TRANSIT</div>
                    </div>
                    <div class="status-line"></div>
                    <div class="status-item">
                        <div class="status-circle">LIVRE</div>
                    </div>
                </div>
            </div>

            <div class="details-section">
                <div class="details-title">Details du colis</div>
                <div class="details-content">
                    <p><strong>Type:</strong> <span id="type">-</span></p>
                    <p><strong>Destination:</strong> <span id="destination">-</span></p>
                    <p><strong>Date d'exp:</strong> <span id="date_exp">-</span></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
