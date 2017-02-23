<?php

function getAllServices() {
    global $connection;
    $query = "
        SELECT
            service.id,
          service.nom,
          service.picto,
          service.description
        FROM service;
        ";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getService($id) {
    global $connection;

    $query = "SELECT
                service.id,
                service.nom,
                service.picto,
                service.description
            FROM service
            WHERE service.id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetch();
}

function insertService($nom, $description, $picto) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO service (nom, description, picto)
                VALUES (:nom_service, :description_service, :picto_service);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':nom_service', $nom);
    $stmt->bindParam(':description_service', $description);
    $stmt->bindParam(':picto_service', $picto);
    $stmt->execute();
}

function updateServices($id, $nom, $description, $picto) {
    /* @var $connection PDO */
    global $connection;

    $query = "UPDATE service
                SET nom = :nom, description = :description, picto = :picto
                WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':picto', $picto);
    $stmt->execute();
}

function deleteService($id) {
    /* @var $connection PDO */
    global $connection;

    $query = "DELETE FROM service WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}
