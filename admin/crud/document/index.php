<?php
require_once '../../../model/database.php';

$liste_documents = getAllDocuments();

require_once '../../layout/header.php';
?>

<h1>Gestion des documents</h1>

<a href="insert_form.php">Ajouter</a>

<table id="myTable" class="display">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Fichier</th>
            <th>Actions</th>
            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($liste_documents as $document) : ?>
        <tr>
            <td><?php echo $document['nom']; ?></td>
            <td><?php echo $document['doc']; ?></td>
  
            <td>
                <a href="update_form.php?id=<?php echo $document['id']; ?>">Modifier</a>
                <form action="delete_query.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $document['id']; ?>">
                    <input type="submit" value="Supprimer">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<?php require_once '../../layout/footer.php'; ?>