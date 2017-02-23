<?php

function getAllCategoriesAfficher() {
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

function getAllCategories() {
    global $connection;
    $query = "
        SELECT
        categorie.id,
        categorie.nom,
        categorie.description,
        categorie.image
        FROM categorie;
        ";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getCategorie($id) {
    global $connection;

    $query = "SELECT
                categorie.id,
                categorie.nom,
                categorie.description,
                categorie.image
            FROM categorie
            WHERE categorie.id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetch();
}

function insertCategorie($nom, $description, $image) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO categorie (nom, description, image)
                VALUES (:nom_categorie, :description, :image);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':nom_categorie', $nom);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':image', $image);
    $stmt->execute();
}

function updateCategorie($id, $nom, $description, $image) {
    /* @var $connection PDO */
    global $connection;

    $query = "UPDATE categorie
                SET nom = :nom,
                description = :description,
                image = :image
                WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':image', $image);
    $stmt->execute();
}

function deleteCategorie($id) {
    /* @var $connection PDO */
    global $connection;

    $query = "DELETE FROM categorie WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}
