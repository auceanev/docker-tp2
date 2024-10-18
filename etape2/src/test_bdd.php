<?php
// Connexion à la base de données
$mysqli = new mysqli("data", "testuser", "testpassword", "test_db");

// Vérification de la connexion
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Insertion de données
if ($mysqli->query("INSERT INTO test_table (name) VALUES ('Test')")) {
    echo "New record created successfully.<br>";
} else {
    echo "Error: " . $mysqli->error . "<br>";
}

// Récupération des données
$result = $mysqli->query("SELECT * FROM test_table");

while ($row = $result->fetch_assoc()) {
    echo $row['name'] . "<br>";
}

// Fermeture de la connexion
$mysqli->close();
?>

