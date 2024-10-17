<?php
// Connexion à la base de données MariaDB
$host = 'data'; // Le nom du conteneur MariaDB défini dans docker-compose.yml
$db   = 'testdb';
$user = 'testuser';
$pass = 'testpassword';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    exit;
}

// Créer une table si elle n'existe pas
$pdo->exec("CREATE TABLE IF NOT EXISTS visits (id INT AUTO_INCREMENT PRIMARY KEY, visit_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP)");

// Insérer une nouvelle visite
$pdo->exec("INSERT INTO visits () VALUES ()");

// Récupérer toutes les visites
$stmt = $pdo->query("SELECT * FROM visits ORDER BY visit_time DESC");

echo "<h1>Liste des visites :</h1>";
while ($row = $stmt->fetch()) {
    echo "Visite ID: " . $row['id'] . " - Temps: " . $row['visit_time'] . "<br>";
}
?>
