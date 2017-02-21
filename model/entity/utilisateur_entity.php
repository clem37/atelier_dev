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
            WHERE utilisateur.mail = :email
            AND utilisateur.mot_de_passe = MD5(:password)
            ";
    
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':email', $mail);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    
    return $stmt->fetch();
}

function getAllUser() {
    global $connection;
    
    $query = "SELECT
                utilisateur.id,
                utilisateur.prenom,
                utilisateur.mail,
                utilisateur.nom
            FROM utilisateur;
            ";
    
    $stmt = $connection->prepare($query);
    $stmt->execute();
    
    return $stmt->fetchAll();
}

function insertUser($nom, $prenom, $mail, $mot_de_passe) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "INSERT INTO utilisateur (nom, prenom, mail, mot_de_passe)
                VALUES (:nom_utilisateur, :prenom_utilisateur, :mail_utilisateur, :mot_de_passe);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':nom_utilisateur', $nom);
    $stmt->bindParam(':prenom_utilisateur', $prenom);
    $stmt->bindParam(':mail_utilisateur', $mail);
    $stmt->bindParam(':mot_de_passe', $mot_de_passe);
    $stmt->execute();
}

function updateUser($id, $nom, $prenom, $mail) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "UPDATE utilisateur
                SET nom = :nom, prenom = :prenom, mail = :mail
                WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':mail', $mail);
    $stmt->execute();
}

function deleteUser($id) {
    /* @var $connection PDO */
    global $connection;
    
    $query = "DELETE FROM utilisateur WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}