<?php

function getAllActualites() {
    global $connection;

    $query = "
        SELECT
    actualite.titre,
    actualite.image,
    actualite.description_courte,
    actualite.date_creation,
    DATE_FORMAT(actualite.date_creation, '%d %M %Y') AS 'date_creation_format'
    FROM actualite
    ORDER BY actualite.date_creation ASC
    LIMIT 3;
    
    ";
    
    $stmt = $connection->prepare($query);
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

