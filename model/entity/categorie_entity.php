<?php

function getAllCategories () {
    global $connection;
    $query = "
        SELECT
        categorie.id,
        categorie.nom,
        categorie.description,
        categorie.image
        FROM categorie
        LIMIT 3;
        ";
   
    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getVille($id) {
    global $connection;
    
    $query = "SELECT
                ville.id,
                ville.nom
            FROM ville
            WHERE ville.id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetch();
}

function insertVille($nom) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "INSERT INTO ville (nom)
                VALUES (:nom_ville);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':nom_ville', $nom);
    $stmt->execute();
}

function updateVille($id, $nom) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "UPDATE ville
                SET nom = :nom
                WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nom', $nom);
    $stmt->execute();
}

function deleteVille($id) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "DELETE FROM ville WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}