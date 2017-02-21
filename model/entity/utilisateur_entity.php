<?php

function getUser($id) {
    global $connection;
    
    $query = "SELECT
                utilisateur.id,
                utilisateur.prenom,
                utilisateur.mail,
                utilisateur.nom
            FROM utilisateur
            WHERE utilisateur.id = :id
            ";
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    
    return $stmt->fetch();
}

function getUserByEmailPassword($mail, $password) {
    global $connection;
    
    $query = "SELECT
                utilisateur.id,
                utilisateur.nom,
                utilisateur.prenom,
                utilisateur.mail
            FROM utilisateur
            WHERE utilisateur.email = :email
            AND utilisateur.mot_de_passe = MD5(:password)
            ";
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':email', $mail);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    
    return $stmt->fetch();
}