<?php

// Configuration de la connexion à la base de données
$host = 'localhost';
$port = '5432';
$database = 'nom_de_la_base_de_donnees';
$user = 'nom_utilisateur';
$password = 'mot_de_passe';

try {
    // Connexion à la base de données
    $dsn = "pgsql:host=$host;port=$port;dbname=$database;user=$user;password=$password";
    $pdo = new PDO($dsn);

    // Exécution d'une requête
    $query = "SELECT * FROM table_name";
    $stmt = $pdo->query($query);

    // Récupération des résultats
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Affichage des résultats
    foreach ($results as $row) {
        echo "ID: " . $row['id'] . ", Nom: " . $row['nom'] . ", Email: " . $row['email'] . "<br>";
    }

} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}