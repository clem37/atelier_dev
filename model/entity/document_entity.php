<?php

function getAllDocuments() {
    global $connection;

    $query = "
        SELECT
        document.id,
    document.nom,
    document.doc
    FROM document
    
    ";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function insertDocument($nom, $doc) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO document (nom, doc)
                VALUES (:nom_document, :fichier);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':nom_document', $nom);
    $stmt->bindParam(':fichier', $doc);
    $stmt->execute();
}

function deleteDocument($id) {
    /* @var $connection PDO */
    global $connection;

    $query = "DELETE FROM document WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}
