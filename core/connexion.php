<?php
// CONNEXION

try {
    // Création d'un objet PDO pour se connecter à la base de données
    $conn = new PDO(
        "mysql:host=localhost;port=3306;dbname=readit_2020;charset=utf8", // infos de connexion (serveur, port, base, encodage)
        "root",   // nom d'utilisateur
        "root"    // mot de passe (sur MAMP souvent "root")
    );

    // Active le mode "exception" pour afficher les erreurs si problème SQL
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // Si la connexion échoue → affiche un message d'erreur et stoppe le script
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
