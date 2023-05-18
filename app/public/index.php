<?php

// Configuration de la connexion à la base de données
$host = 'docker_project-postgres-1';
$port = '5432';
$database = 'test';
$user = 'postgres';
$password = 'postgres';

try {
    // Connexion à la base de données
    $dsn = "pgsql:host=$host;port=$port;dbname=$database;user=$user;password=$password";
    $pdo = new PDO($dsn);

    // Exécution d'une requête
    $query = "SELECT * FROM first_test";
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