<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DM TRANSPORT - Tableau de Bord</title>
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
                        <li><a href="enregistrement.php" class="nav-link">Enregistrement</a></li>
                        <li><a href="historique.php" class="nav-link active">Historique</a></li>
                        <li><a href="support.php" class="nav-link">Support</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        
        <div class="dashboard-container">
            <div class="table-section">
                <h2 class="table-title">Historique</h2>
                <table class="colis-table">
                    <thead>
                        <tr>
                            <th>Nombre du suivi</th>
                            <th>Nom du client</th>
                            <th>Numéro du colis</th>
                            <th>Statut</th>
                            <th>Modifier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $colis = array(
                                array('num' => '0001', 'client' => 'Nikema Adama', 'numero_colis' => 'COLI-001', 'statut' => 'En transit'),
                                array('num' => '0002', 'client' => 'Jean Paul', 'numero_colis' => 'COLI-002', 'statut' => 'Livrée'),
                                array('num' => '0003', 'client' => 'Marie Dupont', 'numero_colis' => 'COLI-003', 'statut' => 'En attente'),
                                array('num' => '0004', 'client' => 'Pierre Martin', 'numero_colis' => 'COLI-004', 'statut' => 'En transit')
                            );
                            
                            foreach ($colis as $item) {
                                $statusClass = '';
                                if ($item['statut'] == 'En transit') $statusClass = 'status-transit';
                                elseif ($item['statut'] == 'Livrée') $statusClass = 'status-livree';
                                elseif ($item['statut'] == 'En attente') $statusClass = 'status-attente';
                                
                                echo '<tr>';
                                echo '<td>' . $item['num'] . '</td>';
                                echo '<td>' . $item['client'] . '</td>';
                                echo '<td>' . $item['numero_colis'] . '</td>';
                                echo '<td><span class="status-badge ' . $statusClass . '">' . $item['statut'] . '</span></td>';
                                echo '<td><a href="#" class="btn-modifier">✎</a></td>';
                                echo '</tr>';
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
