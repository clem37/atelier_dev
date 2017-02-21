<?php

function getAllAnnonces() {
    global $connection;

    $query = "
        SELECT
    annonce.titre,
    annonce.image,
    annonce.nb_chambres,
    annonce.description,
    annonce.nb_lits,
    annonce.prive,
    annonce.id
    FROM annonce;
    
    ";
    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAnnonce($id) {
    global $connection;

    $query = "
        SELECT
    annonce.titre,
    annonce.image,
    annonce.description,
    annonce.prive,
    annonce.id,
    annonce.nb_chambres,
    annonce.nb_lits,
    annonce.utilisateur_id,
    utilisateur.email,
    utilisateur.login as utilisateur_nom,
    utilisateur.image as utilisateur_image, 
    annonce.ville_id,
    ville.nom
    FROM annonce
    INNER JOIN utilisateur ON utilisateur.id = annonce.utilisateur_id
    INNER JOIN ville ON ville.id = annonce.ville_id
    WHERE annonce.id = :id
    
    ";
    $stmt = $connection->prepare($query);
    $stmt->bindParam(':id',$id);
    $stmt->execute();

    return $stmt->fetch();
}

function searchAnnonces($id, $equipement_ids) {
    global $connection;

    $query = "
        SELECT
    annonce.titre,
    annonce.image,
    annonce.description,
    annonce.prive,
    annonce.id,
    annonce.nb_chambres,
    annonce.nb_lit,
    annonce.utilisateur_id,
    utilisateur.email,
    utilisateur.login as utilisateur_nom,
    utilisateur.image as utilisateur_image, 
    annonce.ville_id,
    ville.nom
    FROM annonce
    INNER JOIN utilisateur ON utilisateur.id = annonce.utilisateur_id
    INNER JOIN ville ON ville.id = annonce.ville_id
    LEFT JOIN annonce_has_equipement ON annonce_has_equipement.annonce_id = annonce.id
    WHERE ville.id = :id
    AND annonce_has_equipement.equipement_id IN (1)
    GROUP BY annonce.id

    ";
    $stmt = $connection->prepare($query);
     $stmt->bindParam(':id',$id);
    $stmt->bindParam(':equipement_ids', $equipement_ids);
    $stmt->execute();

    return $stmt->fetchAll();
}
function insertAnnonce($titre, $description, $prix, $image, $prive, $nb_chambres, $nb_lits, $ville_id, $equipement_ids){
    global $connection;
    
    session_start();
    
    $query = "INSERT INTO annonce(titre, description, prix, image, prive, nb_chambres, nb_lits, ville_id, utilisateur_id)
                VALUES(:titre, :description, :prix, :image, :prive, :nb_chambres, :nb_lits, :ville_id, :utilisateur_id)
        ";
    
    $stmt = $connection->prepare($query);
     $stmt->bindParam(':titre',$titre);
     $stmt->bindParam(':description',$description);
     $stmt->bindParam(':prix',$prix);
     $stmt->bindParam(':image',$image);
     $stmt->bindParam(':prive',$prive);
     $stmt->bindParam(':nb_chambres',$nb_chambres);
     $stmt->bindParam(':nb_lits',$nb_lits);
     $stmt->bindParam(':ville_id',$ville_id);
     $stmt->bindParam(':utilisateur_id',$_SESSION['id']);
     
    
    $stmt->execute();
    
    $id = $connection->lastInsertId();
    
    foreach($equipement_ids as $equipement_id) {
        insertAnnonceEquipement($id, $equipement_id);
    }
   
    
    
    
};

function insertAnnonceEquipement($annonce_id, $equipement_id) {
     global $connection;
     
     $query = "INSERT INTO annonce_has_equipement (annonce_id, equipement_id)
         VALUES (:annonce_id, :equipement_id)
         ";
     
     $stmt = $connection->prepare($query);
     $stmt->bindParam(':annonce_id',$annonce_id);
     $stmt->bindParam(':equipement_id',$equipement_id);
     
      $stmt->execute();
};

