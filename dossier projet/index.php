<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
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
            <div class="dashboard-top">
                <div class="dashboard-section">
                    <h2 class="section-title">Tableau de bord</h2>
                    <button class="btn-nouveau-colis">+</button>
                </div>
                
                <div class="historique-section">
                    <h2 class="section-title">Historique</h2>
                    <div class="chart-container">
                        <canvas id="statistiquesChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="stats-cards">
                <div class="stat-card">
                    <h3>Colis en transit</h3>
                    <p class="stat-number">24</p>
                </div>
                <div class="stat-card">
                    <h3>Livraison réussie</h3>
                    <p class="stat-number">156</p>
                </div>
                <div class="stat-card">
                    <h3>En attente</h3>
                    <p class="stat-number">8</p>
                </div>
            </div>

            <div class="table-section">
                <h2 class="table-title">Derniers colis enregistrés</h2>
                <table class="colis-table">
                    <thead>
                        <tr>
                            <th>Numéro de suivi</th>
                            <th>Nom du client</th>
                            <th>Nature du colis</th>
                            <th>Statut</th>
                            <th>Modifier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>0001</td>
                            <td>Nikema Adama</td>
                            <td>enveloppe</td>
                            <td><span class="status-badge status-transit">En transit</span></td>
                            <td><a href="#" class="btn-modifier">✎</a></td>
                        </tr>
                        <tr>
                            <td>0002</td>
                            <td>Jean Paul</td>
                            <td>Colis</td>
                            <td><span class="status-badge status-livree">Livrée</span></td>
                            <td><a href="#" class="btn-modifier">✎</a></td>
                        </tr>
                        <tr>
                            <td>0003</td>
                            <td>Marie Dupont</td>
                            <td>Document</td>
                            <td><span class="status-badge status-attente">En attente</span></td>
                            <td><a href="#" class="btn-modifier">✎</a></td>
                        </tr>
                        <tr>
                            <td>0004</td>
                            <td>Pierre Martin</td>
                            <td>Paquet</td>
                            <td><span class="status-badge status-transit">En transit</span></td>
                            <td><a href="#" class="btn-modifier">✎</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        // Graphique en camembert
        const ctx = document.getElementById('statistiquesChart').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['En transit', 'Livrée', 'En attente', 'Retournée'],
                datasets: [{
                    data: [24, 156, 8, 5],
                    backgroundColor: [
                        '#1a5f3f',
                        '#FFD700',
                        '#FF6B6B',
                        '#999999'
                    ],
                    borderColor: '#000',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                plugins: {
                    legend: {
                        position: 'right',
                        labels: {
                            font: {
                                size: 12,
                                weight: 'bold'
                            },
                            padding: 15
                        }
                    }
                }
            }
        });
    </script>
</body>
</html>
