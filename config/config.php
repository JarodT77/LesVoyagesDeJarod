<?php

if (getenv('JAWSDB_URL') !== false) {
    $dbparts = parse_url(getenv('JAWSDB_URL'));

    $host = $dbparts['host'];
    $username = $dbparts['user'];
    $password = $dbparts['pass'];
    $dbname= ltrim($dbparts['path'],'/');
} else {

$host = "localhost";
$username = "root";
$password = "";
$dbname = "blog";
}

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
