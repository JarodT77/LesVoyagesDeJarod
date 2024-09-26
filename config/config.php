<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

try {
    $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $bdd->prepare("SELECT id, nom, commentaire FROM avis_khmer");
    $stmt->execute();
    
    $comments = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Retourner les données au format JSON
   // Écrire les données JSON dans un fichier
   file_put_contents('comments.json', json_encode($comments));
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
