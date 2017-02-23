<?php

function getUser($id) {
    global $connection;

    $query = "SELECT
                utilisateur.id,
                utilisateur.prenom,
                utilisateur.mail,
                utilisateur.nom,
                utilisateur.admin
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
                utilisateur.mail,
                utilisateur.admin
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
                utilisateur.nom,
                utilisateur.admin
            FROM utilisateur;
            ";

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function insertUser($nom, $prenom, $mail, $mot_de_passe, $admin) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO utilisateur (nom, prenom, mail, mot_de_passe, admin)
                VALUES (:nom_utilisateur, :prenom_utilisateur, :mail_utilisateur, MD5(:mot_de_passe), :administrateur);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':nom_utilisateur', $nom);
    $stmt->bindParam(':prenom_utilisateur', $prenom);
    $stmt->bindParam(':mail_utilisateur', $mail);
    $stmt->bindParam(':mot_de_passe', $mot_de_passe);
    $stmt->bindParam(':administrateur', $admin);
    $stmt->execute();
}

function updateUser($id, $nom, $prenom, $mail, $admin) {
    /* @var $connection PDO */
    global $connection;

    $query = "UPDATE utilisateur
                SET nom = :nom, prenom = :prenom, mail = :mail, admin = :admin
                WHERE id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':mail', $mail);
    $stmt->bindParam(':admin', $admin);
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
