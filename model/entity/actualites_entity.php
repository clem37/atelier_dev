<?php

function getAllActualites() {
    global $connection;

    $query = "
        SELECT
        actualite.id,
    actualite.titre,
    actualite.image,
    actualite.description_courte,
    actualite.date_creation,
    DATE_FORMAT(actualite.date_creation, '%d %M %Y') AS 'date_creation_format',
    actualite.description_longue,
    actualite.afficher
    FROM actualite
    ORDER BY actualite.date_creation ASC;
    
    ";
    
    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllActualitesAfficher() {
    global $connection;

    $query = "
        SELECT
        actualite.id,
    actualite.titre,
    actualite.image,
    actualite.description_courte,
    actualite.date_creation,
    DATE_FORMAT(actualite.date_creation, '%d %M %Y') AS 'date_creation_format',
    actualite.description_longue,
    actualite.afficher
    FROM actualite
    WHERE afficher = 1
    ORDER BY actualite.date_creation ASC;
    
    ";
    
    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function insertActualite($titre, $description_courte, $description_longue, $date_creation, $afficher, $image){
    global $connection;
    
    
    $query = "INSERT INTO actualite(titre, description_courte, description_longue, image, date_creation, afficher)
                VALUES(:titre, :description_courte, :description_longue, :image, :date_creation, :afficher);
        ";
    
    $stmt = $connection->prepare($query);
     $stmt->bindParam(':titre',$titre);
     $stmt->bindParam(':description_courte',$description_courte);
     $stmt->bindParam(':description_longue',$description_longue);
     $stmt->bindParam(':image',$image);
     $stmt->bindParam(':date_creation',$date_creation);
     $stmt->bindParam(':afficher', $afficher);

     
    
    $stmt->execute();
    
};

function deleteActualite($id) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "DELETE FROM actualite WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}