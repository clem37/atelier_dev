<?php

function getAllProduits() {
    global $connection;

    $query = "
        SELECT
        produit.id,
    produit.titre,
    produit.image,
    produit.description,
    produit.reference,
    produit.materiau,
    produit.colisage,
    produit.poids,
    categorie.nom AS categorie
    FROM produit
    INNER JOIN categorie ON categorie.id = produit.categorie_id;
    
    ";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllServicesByProduit($id) {
    global $connection;

    $query = "
        SELECT
        service.id,
    service.nom,
    service.picto,
    service.description
    FROM service
    
    INNER JOIN service_has_produit
                    ON service_has_produit.service_id = service.id
            WHERE service_has_produit.produit_id = :id;";
    
    

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

