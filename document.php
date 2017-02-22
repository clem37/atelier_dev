<?php

require_once 'model/database.php';

$liste_documents = getAllDocuments();
?>

<a href="index.php">Retour sur la page d'accueil</a>

<?php 
foreach($liste_documents as $document) : ?>
<h3><?php echo $document['nom'];?></h3>
<a href="uploads/<?php echo $document['doc'];?>" download="<?php echo $document['nom'];?>">Télécharger le document</a>
<?php endforeach;?>
