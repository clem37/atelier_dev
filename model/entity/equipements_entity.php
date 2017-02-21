<?php

function getAllEquipements($id) {
    global $connection;

    $query = "
        SELECT
    equipement.nom,
    equipement.icone,
    equipement.id
    FROM equipement
    INNER JOIN annonce_has_equipement ON annonce_has_equipement.equipement_id = equipement.id
    WHERE annonce_has_equipement.annonce_id = :id;
    
    ";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id',$id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllEquipement () {
    global $connection;
    $query = "
        SELECT
          equipement.nom,
    equipement.icone,
    equipement.id
        FROM equipement
        ";
    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll(); 
    
    }
    
    function getEquipement($id) {
    global $connection;
    
    $query = "SELECT
                equipement.id,
                equipement.nom,
                equipement.icone
            FROM equipement
            WHERE equipement.id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetch();
}
    
    function insertEquipement($nom) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "INSERT INTO equipement (nom)
                VALUES (:nom_equipement);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':nom_equipement', $nom);
    $stmt->execute();
}

function updateEquipement($id, $nom) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "UPDATE equipement
                SET nom = :nom
                WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nom', $nom);
    $stmt->execute();
}

function deleteEquipement($id) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "DELETE FROM equipement WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}